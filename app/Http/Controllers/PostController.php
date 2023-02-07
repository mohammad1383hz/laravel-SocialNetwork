<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
   public function create(Request $request){
    // dd($request);
    $post= new Post();
    $image=$request->file('image')->store('images');
    $post->title =$request->title;
    $post->image=Storage::url($image);
    $post->body=$request->body;
    $post->user_id=1;
    $post->save();
   }
}
