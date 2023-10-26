<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;


class PostRepository implements PostRepositoryInterface {
    public function All(){
        return Post::orderBy('id', 'DESC')->get();
    }

      public function findById($id){
        return Post::find($id);
    }

    public function storeData($request){
        
        $post           = new Post();
        
        if ($request->hasFile('thumbnail')) {
            $destinationPath= 'public/Post-thumbnails/';
            $image      = $request->file('thumbnail');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $post->thumbnail = $fileName;

            if($request->hasFile('slide_image')){
                $destinationPath= 'public/Post-slider-images/';
                $image      = $request->file('slide_image');
                $fileName   = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs($destinationPath,$fileName);
                $post->slide_image = $fileName;

                 
                if($request->hasFile('header_image')){
                    $destinationPath= 'public/Post-header-images/';
                    $image      = $request->file('header_image');
                    $fileName   = time() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs($destinationPath,$fileName);
                    $post->header_image = $fileName;
                }
            }
        }


        $post->title        = $request->title;
        $post->sub_title    = $request->sub_title;
        $post->category_id  = $request->category_id;
        $post->tag          = $request->tag;
        $post->description  = $request->description;
        $post->status       = $request->status;
        $post->save();
    }
  
    public function updateData($request, $post){
 
        if ($request->hasFile('thumbnail')) {
            $destinationPath= 'public/Post-thumbnails/';
            $image      = $request->file('thumbnail');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $post->thumbnail = $fileName;

          
        }

        if($request->hasFile('slide_image')){
            $destinationPath= 'public/Post-slider-images/';
            $image      = $request->file('slide_image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $post->slide_image = $fileName;
        }

        if($request->hasFile('header_image')){
            $destinationPath= 'public/Post-header-images/';
            $image      = $request->file('header_image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $post->header_image = $fileName;
        }


        $post->title        = $request->title;
        $post->sub_title    = $request->sub_title;
        $post->category_id  = $request->category_id;
        $post->tag          = $request->tag;
        $post->description  = $request->description;
        $post->status       = $request->status;
        $post->update();
    }
}