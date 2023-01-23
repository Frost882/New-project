<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $post = Post::find(1);
        dump($post->title);
        dump($post->content);
        dump($post->image);
        dump($post->likes);
    }
        
}
