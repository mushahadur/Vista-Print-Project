<?php

namespace App\Http\Controllers\Backend\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    protected $postRepository;
    public function __construct(PostRepositoryInterface $postRepository)
    {
         $this->postRepository = $postRepository;
    }
    
    public function index()
    {
        // $users = $this->userRepository->All();
       return view('backend.pages.post.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $this->postRepository->storeData($request);
        return redirect(route('post.index'))->with('message', 'Post  create successfully.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
