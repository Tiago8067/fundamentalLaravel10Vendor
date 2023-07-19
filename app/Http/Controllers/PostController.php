<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category2;
use App\Models\Post2;
use Illuminate\Http\Request;
use File;

class PostController extends Controller
{
    public function __construct()
    {
        // $this->middleware('authCheck2'); // protecao para todos as funcoes
        // $this->middleware('authCheck2')->only(['create', 'show']);
        $this->middleware('authCheck2')->except(['index']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$posts = Post2::all();
        $posts = Post2::paginate(5);
        return view('index2', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category2::all();
        return view('create', compact('categories'));	
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max:2028', 'image'],
            'title' => ['required', 'max:255'],
            'category_id' => ['required', 'integer'],
            'description' => ['required']
        ]);

        $fileName = time().'_'.$request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('uploads', $fileName); // uploads/filename
        
        $post = new Post2();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category2_id = $request->category_id;
        $post->image = 'storage/'.$filePath; //storage/uploads/filename
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post2::findOrFail($id);
        return view('show', compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post2::findOrFail($id);
        $categories = Category2::all();
        return view('edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'max:255'],
            'category_id' => ['required', 'integer'],
            'description' => ['required']
        ]);

        $post = Post2::findOrFail($id);

        if($request->hasFile('image'))
        {
            $request->validate([
                'image' => ['required', 'max:2028', 'image']
            ]);

            $fileName = time().'_'.$request->image->getClientOriginalName();
            $filePath = $request->image->storeAs('uploads', $fileName);

            File::delete(public_path($post->image));

            $post->image = 'storage/'.$filePath;
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->category2_id = $request->category_id;

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post2::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index');
    }

    public function trashed()
    {
        $posts = Post2::onlyTrashed()->get();
        return view('trashed', compact('posts'));
    }

    public function restore($id)
    {
        $post = Post2::onlyTrashed()->findOrFail($id);

        $post->restore();

        return redirect()->back();
        //return redirect()->route('posts.index');
    }

    public function forceDelete($id)
    {
        $post = Post2::onlyTrashed()->findOrFail($id);

        File::delete(public_path($post->image));
        
        $post->forceDelete();

        return redirect()->back();
        //return redirect()->route('posts.index');
    }
}
