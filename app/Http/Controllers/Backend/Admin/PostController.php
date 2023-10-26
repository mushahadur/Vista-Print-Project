<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostController extends Controller
{
    protected $postRepository;
    public function __construct(PostRepositoryInterface $postRepository)
    {
         $this->postRepository = $postRepository;
    }
    
    public function index()
    {
        $posts = $this->postRepository->All();
       return view('backend.pages.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.pages.post.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $this->postRepository->storeData($request);
        return redirect(route('post.index'))->with('message', 'Post  create successfully.');
    }

    public function edit(Post $post)
    {
        $category = Category::all();
        return view('backend.pages.post.edit', compact('category', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        $this->postRepository->updateData($request, $post);
        return redirect(route('post.index'))->with('message', 'Post info Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('post.index'))->with('message', 'Post Deleted successfully.');
    }
}
