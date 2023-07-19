<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request)
    {
        //return 'hello';
        //return $request->all();

        //dd($request->file('image'));

        //$request->image->store('/images');

        $request->validate([
            'image' => ['required', 'min:100', 'max:500', 'mimes:png,jpg,gif']
            //'image' => ['required', 'min:100', 'max:500', 'image']
        ]);

        $request->image->storeAs('/images', 'new_image.jpg');
    }
}
