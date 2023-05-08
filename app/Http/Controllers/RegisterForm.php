<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterForm extends Controller
{
    //
    public function index()
    {
        return view('form');
    }
    public function register(Request $request)
    {
        // validating coming post request 
        $request->validate(

            [
                'name' => 'required',  //name field required
                'email' => 'required | email', // email field must be email
                'password' => 'required ', // password field required 
                'confirmPassword' => 'required |same:password', // confirmpassword field required and must match to password field
            ]
        );


        echo "<pre>";
        print_r($request->all());
    }
}
