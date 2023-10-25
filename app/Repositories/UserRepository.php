<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {
    public function All(){
        return User::orderBy('id', 'DESC')->get();
    }

      public function findById($id){
        return User::find($id);
    }

    public function storeData($request){
        $user           = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->role     = $request->role;
        $user->save();
    }
  
    public function updateData($request, $user){

        $user->name    = $request->name;
        $user->email   = $request->email;
        $user->password = Hash::make($request->password);
        $user->role     = $request->role;
        $user->update();
    }
}