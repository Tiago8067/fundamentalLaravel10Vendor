<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Mail\OrderShipped;
use App\Models\Post2;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::group(["middleware" => "authCheck"], function () {
Route::group(["middleware" => "authCheck2"], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/profile', function () {
        return view('profile');
    });
});


Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed'); //funcao adicionado num controller resource tem de estar acuioma da rota resource, qualquer novo metodo adiconado
Route::get('/posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');
Route::delete('/posts/{id}/force_delete', [PostController::class, 'forceDelete'])->name('posts.force_delete');

// Route::resource('posts', PostController::class)->middleware('authCheck2');
Route::resource('posts', PostController::class);

Route::get('/unavailable', function () {
    return view('unavailable');
})->name('unavailable');

// Route::group([], callback)

Route::get('contact2', function() {
    $posts = Post2::all();
    return view('contact2', compact('posts'));
});

Route::get('send-email', function() {
    /* Mail::raw('Hello is this a emaol', function($message) {
        $message->to('test@gmail.com')->subject('noreplay');
    }); */

    Mail::send(new OrderShipped);

    dd('success');
});

Route::get('get-session', function(Request $request) { 
    // $data = session()->all();

    $data = $request->session()->all();

    // $data = $request->session()->get('_token');

    dd($data);
});


Route::get('save-session', function(Request $request) {
    // $request->session()->put('user_id', '123');
    // $request->session()->put(['user_status' => 'logged_in']);
    session(['user_ip' => '123.23.11']);
    return redirect('get-session');
});

Route::get('destroy-session', function(Request $request) {
    // $request->session()->forget('user_id');
    // $request->session()->forget(['user_status', 'user_ip']);
    // session()->forget('user_id');
    // session()->forget(['user_status', 'user_ip']);
    session()->flush();
    // $request->session()->flush();
    return redirect('get-session');
});

Route::get('flash-session', function(Request $request) {
    $request->session()->flash('status', 'ture'); // quando se usa este metodo flash, mudando de pagina a secao e automaticamente destroiada/apagada
    return redirect('get-session');
});

Route::get('forget-cache', function() {
    Cache::forget('posts');
}); // mudando para esta rota a cache que foi guardada para sempre e apagada e quando vooltarmos a essa rota a cache volta a ser guardada novamente









Route::get('/home', HomeController::class);

Route::post('/upload-file', [ImageController::class, 'handleImage'])->name('upload-file');

Route::get('/success', function () {
    return '<h1>Upload Success</h1>';
})->name('success');

Route::get('/download', [ImageController::class, 'download'])->name('download');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

/*Route::get('about', function () {
    $about = 'This is a About Page';
    $about2 = "This is about two";
    //return view('about.index', ['about' => $about]);
    return view('about.index', compact('about', 'about2'));
    return view('about.index');
})->name('about');*/

Route::get('about', [AboutController::class, 'index'])->name('about');

Route::get('contact', [ContactController::class, 'index']);

Route::resource('blog', BlogController::class);

//specifi any segment dynamic routes
Route::get('contact/{id}', function ($id) {
    return $id;
})->name('edit-contact');

/* Route::get('home', function () {
    //return "<a href='".route('about')."'>About</a>";
    return "<a href='".route('edit-contact', 1)."'>About</a>";
}); */



/** Route Grouping */
/* Route::get('costumer', function () {
    return "<h1>Costumer List</h1>";
});

Route::get('costumer/create', function () {
    return "<h1>Costumer Create</h1>";
});

Route::get('costumer/show', function () {
    return "<h1>Costumer Show</h1>";
}); */

Route::group(['prefix' => 'costumer'], function () {
    Route::get('/', function () {
        return "<h1>Costumer List</h1>";
    });

    Route::get('/create', function () {
        return "<h1>Costumer Create</h1>";
    });

    Route::get('/show', function () {
        return "<h1>Costumer Show</h1>";
    });
});


/** Route Methods */
/**
 * GET - Request a resource
 * POST - Create a new resource
 * PUT - Update a resource
 * PATCH - Modify a resource
 * DELETE - Delete a resource
 */


/** Fallback Route */
/* Route::fallback(function() {
    return "Route Not Found";
}); */
