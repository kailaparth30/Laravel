<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\group;


class IndexController extends Controller
{
    public function index()
    {
        return Member::with('group')->get();
    }

    public function group()
    {
        return Group::with('member')->get();
    }
}
