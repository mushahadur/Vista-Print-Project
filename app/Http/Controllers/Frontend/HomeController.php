<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $posts = Post::get();
       return view('frontend.pages.home.index', compact('categories','posts'));
    }
}
