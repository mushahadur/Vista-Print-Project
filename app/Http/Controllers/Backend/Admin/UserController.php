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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // dd($request->all());
        $this->userRepository->storeData($request);
        return redirect(route('user.index'))->with('message', 'User info create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('backend.pages.user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $this->userRepository->updateData($request, $user);
        return redirect(route('user.index'))->with('message', 'User info Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'))->with('message', 'User Deleted successfully.');

    }
}
