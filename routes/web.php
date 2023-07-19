<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use Illuminate\Foundation\Console\AboutCommand;
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
