<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Category;
use App\Models\MyPost;
use App\Models\Post;
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
        
        $categories = Category::find(2)->posts;

        return view('home', compact('categories'));
    }
}
