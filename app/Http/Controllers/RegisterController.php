<?php

namespace App\Http\Controllers;
use App\Models\register;

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
    public function registerdatastore(Request $request)
    {
        register::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/')->with('msg', ' Created add susscesfully');
    }
}

