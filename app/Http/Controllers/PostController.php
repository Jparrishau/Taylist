<?php

namespace App\Http\Controllers;

use App\Post;
use App\Photo;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request){
        $post = new Post();
        $post->title = $request['title'];
        $post->category = "Furniture";
        $post->description = $request['description'];
        $post->state = "FL";
        $post->city = "Filler";
        $post->zipcode = 55555;
        $request->user()->posts()->save($post);
        $this->uploadPhoto($request, $post);
        
        return redirect()->route('gallery');
  }
  
  public function uploadPhoto(Request $request, Post $post){
      $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('/img/gallery/furniture'), $imageName);
        
        $photos = new Photo();
        $photos->photo_path = $imageName;
        
        $post = Post::where('id', $post['id'])->first();
        $post->photos()->save($photos);
  }
}
