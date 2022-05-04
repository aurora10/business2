<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


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

        $socialShare = \Share::page(
                `https://www.marketorix.com/posts/$post->slug`,
                'null', ['class' => 'my-class', 'id' => 'my-id', 'title' => 'my-title', 'rel' => 'nofollow noopener noreferrer']
            )
            ->facebook()
            ->twitter()
            ->reddit()
            ->linkedin()
            ->whatsapp()
            ->telegram();

            
        //dd($socialShare);
        return view('pages.blog.show', compact('post', 'socialShare'));
    }
}
