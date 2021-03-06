<?php

namespace App\Http\Controllers;

use App\Post;
use App\Photo;
use App\Notifications\NewPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request){
        $post = new Post();
        $post->title = $request['title'];
        $post->category = $request['category'];
        $post->description = $request['description'];
        $post->asking_price = 44.5;
        $post->item_condition = "Used - Like New";
        $post->state = "FL";
        $post->city = "Orlando";
        $post->zipcode = 55555;
        
        $request->user()->posts()->save($post);
        $this->uploadPhoto($request, $post);
        $request->user()->notify(new NewPost($post));
        
        return redirect()->route('gallery', $request['category']);
  }
  
  public function uploadPhoto(Request $request, Post $post){
      $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = $post->category;
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
  
        $request->image->move((public_path('/img/gallery/') . $category), $imageName);
        
        $photos = new Photo();
        $photos->photo_path = $imageName;
        
        $post = Post::where('id', $post['id'])->first();
        $post->photos()->save($photos);
  }
}
