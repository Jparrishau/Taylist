<?php

namespace App\Http\Controllers;

use App\Post;
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
    public function createGallery()
    {
        $posts = Post::with('photos')->get();
        
        /*$content = json_decode($posts, true);
        var_dump($content[0]);
        exit();*/
        
        return view('gallery', ['posts' => $posts]);
    }
}
