<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function createGallery($category)
    {
        $posts = Post::with('photos')
            ->where('category', $category)->get();
     
        return view('gallery', ['category' => $category, 'posts' => $posts]);
    }
}
