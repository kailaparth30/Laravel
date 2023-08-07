<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('layout.form');
    }

    public function Register()
    {

        return view('layout1/home/register');
    }

    public function registerdata(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required ',
            ]
        );
    }
}
