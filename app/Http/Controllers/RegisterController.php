<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('layout.form');
    }

    public function Register(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required ',
                'address' => 'required ',
                'state' => 'required ',
                'country' => 'required ',
                'gander' => 'required', 'in:male,female,',
                'password_confir' => 'required|same:password',
            ]
        );

        echo "<pre>";
        print_r($request->all());
    }
}
