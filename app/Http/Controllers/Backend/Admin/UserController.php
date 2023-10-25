<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
         $this->userRepository = $userRepository;
    }
    
    public function index()
    {
        $users = $this->userRepository->All();
       return view('backend.pages.user.index', compact('users'));
    }

    public function store(UserRequest $request)
    {
        $this->userRepository->storeData($request);
        return redirect(route('user.index'))->with('message', 'User info create successfully.');
    }

    public function edit(User $user)
    {
        return view('backend.pages.user.edit')->with('user', $user);
    }

    public function update(UserRequest $request, User $user)
    {
        $this->userRepository->updateData($request, $user);
        return redirect(route('user.index'))->with('message', 'User info Update successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'))->with('message', 'User Deleted successfully.');
    }
}
