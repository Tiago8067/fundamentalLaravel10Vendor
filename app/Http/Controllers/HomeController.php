<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MyPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        /* $blogs = [
            [
                'title' => 'Title one',
                'body' => 'this is a body text',
                'status' => 1
            ],
            [
                'title' => 'Title two',
                'body' => 'this is a body text',
                'status' => 0
            ],
            [
                'title' => 'Title three',
                'body' => 'this is a body text',
                'status' => 0
            ],
            [
                'title' => 'Title four',
                'body' => 'this is a body text',
                'status' => 1
            ]
        ]; */

        //return DB::table('posts')->get();
        //return DB::table('posts')->find(7);
        //return DB::table('posts')->first();

        //return DB::table('posts')->pluck('title', 'id');

        //return DB::table('posts')->where('id', '=', 10)->get(); // igual a return DB::table('posts')->where('id', 10)->get();
        //return DB::table('posts')->where('id', '>', 10)->where('id', '<', 20)->get();
        //return DB::table('posts')->where('status', '=', 1)->get();

    
        //return view('home', compact('blogs'));

        /* 
        DB::table('posts')->insert([
            [
                'title' => 'This is a test Data',
            'description' => 'this a discription',
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'user_id' => 1
            ],
            [
                'title' => 'This is a test Data 2',
            'description' => 'this a discription',
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'user_id' => 1
            ]
        ]);

        dd('success'); */

        /* 
        DB::table('posts')->where('id', '=', 54)->update([
            'title' => 'hey we updated our title',
            'description' => 'this a discription updated',
        ]);

        dd('success'); */

        // DB::table('posts')->where('id', '=', 52)->delete();
        /* 
        DB::table('posts')->delete(52);

        dd('success'); */

        //return DB::table('posts')->join('users', 'posts.user_id', '=', 'users.id')
        /* ->select('posts.*') */
        //->select('users.*')
        //->get();

        //Aggregates

        /**
         * count()
         * max()
         * min()
         * avg()
         * sum()
         */

        //return DB::table('posts')->count();

        //return $posts = MyPost::all();
    }
}
