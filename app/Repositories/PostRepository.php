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

        $category           = new Post();
        $category->name     = $request->name;
        $category->status    = $request->status;
        $category->save();
    }
  
    public function updateData($request, $category){

        $category->name     = $request->name;
        $category->status    = $request->status;
        $category->update();
    }
}