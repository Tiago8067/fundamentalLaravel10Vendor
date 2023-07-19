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
use Illuminate\Support\Facades\Storage;
use File;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('home');

        //Storage::delete(['images/TnYfNwGbHwvrM3gJs7wtAFhbDSDrAfaWRwgFO1RA.png']);

        //File::delete(storage_path('/app/public/RhrBxh8JO9eP3vsuEyNYR9UWZA2PDwflg580T3JS.png'));

        //unlink(storage_path('/app/public/images/new_image.jpg'));

        
    }
}
