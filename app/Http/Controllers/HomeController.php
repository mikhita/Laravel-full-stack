<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
use App\Models\Address;
use App\Models\Category;
use App\Models\Tag;


class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $categories = Category::find(1)->posts;
        $posts = Post::with('tags')->get();
        $tag = Tag::first();

        // $post->tags()->attach([2,3,4]);
        // return $posts;
        return view('home', compact('posts'));


    }
    
}
