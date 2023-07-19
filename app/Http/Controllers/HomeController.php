<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MyPost;
use App\Models\Post;
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

        /**
         * 1.Retriveing all data
         * 2.Retriveing single data
         * 3.Retriveing a single data or throw error
         */

        //return Post::all(); //DB::table('posts')->get();

        /* return Post::find(55);

        $post = Post::find(55);

        return $post->title; */

        //return $post = Post::findOrFail(59);

        /* $posts = Post::all();

        foreach($posts as $post) 
        {
            echo $post->title;
        } */


        //return Post::where('status', 1)->get();
        //return Post::where('status', 1)->orWhere('id', 55)->get();

        // 51 => Inserting or Saving data with Eloquent
        /* $post = new Post();

        $post->title = 'post 4';
        $post->description = 'post 4 description inserted';
        $post->status = 1;
        $post->publish_date = date('Y-m-d');
        $post->user_id = 1;

        $post->save();

        dd('success'); */


        // 52 => Updating data with Eloquent

        /* //$post = Post::find(56);
        $post = Post::where('id', 57)->first();
        //$post = Post::where('id', 57)->first(); // collection

        $post->title = 'post 4 new title updated';

        $post->save();

        dd('success'); */

        //53 => Deleting data with Eloquent

        //Post::find(70)->delete(); 
        //Post::findOrFail(70)->delete();
        
        /* Post::where('id', 70)->delete(); 


        dd('success'); */


        //54 => Mass Assignment
        /* $post = Post::create([
            'title' => 'this is from a mass assign',
            'description' => 'this a discription from mass assign',
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'user_id' =>  1
        ]); */

        /* $post = Post::find(58)->update([
            'title' => 'the data from a mass assign has been updated'
        ]); */

        /* $post = Post::where('status', 1)->update([
            'title' => 'the data from a mass assign has been updated'
        ]);

        dd('success'); */

        // 55 => Soft Deleting -Trashing
        /* Post::where('id', 57)->delete();

        dd('success'); */

        //return Post::all();

        //56 => Retrieving Deleted Data
        //return Post::onlyTrashed()->get();

        //57 => Restore A Record Or Deleting A Record Permanently
        /* Post::withTrashed()->find(57)->restore();

        dd('success'); */

        Post::withTrashed()->find(57)->forceDelete();

        dd('success');

        //58 => Factories
    }
}
