<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        //$posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->take(10)->get();
        

      
        
    //dd($posts);
       return view('pages.blog.blog', compact('posts'));
        
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->firstOrFail();
        //dd($post);
        return view('pages.blog.show', compact('post'));
    }
}
