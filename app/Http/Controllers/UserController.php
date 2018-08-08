<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('token');
    }


    public function index()
    {
        return view('site/about')->with('name', 222);
    }
}
