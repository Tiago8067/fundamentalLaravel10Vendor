<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request)
    {
        $request->validate([
            'image' => ['required', 'min:100', 'max:500', 'mimes:png,jpg,gif']
        ]);

        $request->image->storeAs('/images', 'new_image.jpg');

        //return redirect()->route('success');
        //return redirect()->back();
        return redirect('/success');
    }

    public function download()
    {
        return response()->download(public_path('/storage/images/new_image.jpg'));
    }
}
