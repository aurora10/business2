<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;   

class ShareSocialController extends Controller
{
    public function shareSocial()
    {
        $post = Post::where('slug', $slug)
            ->firstOrFail();
        
        $socialShare = \Share::page(
            'https://www.nicesnippets.com/posts/$post->slug',
            'Laravel Custom Foreign Key Name Example',
        )
        ->facebook()
        ->twitter()
        ->reddit()
        ->linkedin()
        ->whatsapp()
        ->telegram();
        
        return view('share-social', compact('socialShare'));
    }
}
