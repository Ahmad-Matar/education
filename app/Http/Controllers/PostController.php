<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with(['user'])->get();
        return view('post.index',[
            'posts' => $posts
        ]);
    }

    public function show(){
        $posts = Post::where('user_id',auth()->user()->id)->get();

        return view('post.show',[
            'posts' => $posts

        ]);

    }


    public function create(){
        return view('post.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => ['required','string','max:255'],
            'description' => ['required','string']
        ]);

        Post::create([
            'name'        => $request->post('name'),
            'description' => $request->post('description'),
            'user_id'    => auth()->user()->id
        ]);

        return redirect('post/get/post');
    }
    //
}
