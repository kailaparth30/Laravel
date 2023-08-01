<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services()
    {
        return view('layout1.home.service');
    }
}
