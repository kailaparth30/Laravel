<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtfolioController extends Controller
{
    public function protfilio()
    {
        return view('layout1.home.Portfolio');
    }
}
