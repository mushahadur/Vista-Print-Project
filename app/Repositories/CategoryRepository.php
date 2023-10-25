<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;


class CategoryRepository implements CategoryRepositoryInterface {
    public function All(){
        return Category::orderBy('id', 'DESC')->get();
    }

      public function findById($id){
        return Category::find($id);
    }

    public function storeData($request){

        $category           = new Category();
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