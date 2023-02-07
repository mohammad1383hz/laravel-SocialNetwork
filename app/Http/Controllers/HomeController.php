<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main(){
        $posts=Post::all();

        return view('main',compact('posts'));
    }
    public function profile(User $user){
        return view('profile.user',compact('user'));
    }
    public function editprofile(User $user,Request $request){
        dd($user);
        dd($request->name);
    }

}
