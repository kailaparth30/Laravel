<?php

namespace App\Http\Controllers;

use App\Models\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('layout1.home.Login');
    }

    public function loginprocess(Request $request)
    {
        login::create([

            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/')->with('msg', ' Created add susscesfully');
    }
}
