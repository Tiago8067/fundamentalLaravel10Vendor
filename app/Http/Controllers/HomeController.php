<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Category;
use App\Models\MyPost;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        /* $categories = Category::all(); */
        
        /* $categories = Category::find(2)->posts;

        return view('home', compact('categories')); */

        // post may have many tags
        
        // tag may have many posts

        //pivot table

        $posts = Post::with('tags')->get();

        $tag = Tag::first();

        //$post->tags()->attach($tag);
        //$post->tags()->attach([2,3,4]);

        //return $post;
        return view('home', compact('posts'));
    }
}
