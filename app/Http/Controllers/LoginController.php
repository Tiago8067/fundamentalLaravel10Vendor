<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    //public function handleLogin(Request $request)
    public function handleLogin(LoginRequest $request)  
    {
        /* echo $_POST['name'];
        echo $_POST['email'];
        echo $_POST['password']; */

        //dd($request->all());


        /* $request->validate([
            // 'name' => 'required|alpha',
            'name' => ['required', 'alpha', 'min:6', 'max:10'],
            'email' => ['required', 'email'],
            'password' => 'required'
        ], [
            'name.required' => 'The user name field must be required!',
            'name.alpha' => 'User name should only contain letters!',
            'email.email' => 'Hello this is not a email address!'
        ]); */

        /* $request->validate(, [
            'name.required' => 'The user name field must be required!',
            'name.alpha' => 'User name should only contain letters!',
            'email.email' => 'Hello this is not a email address!'
        ]); */

        return $request;
    }
}
