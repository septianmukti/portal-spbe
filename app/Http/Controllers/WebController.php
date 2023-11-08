<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web.beranda');
    }

    public function blog()
    {
        return view('web.blog');
    }

    public function single()
    {
        return view('web.blog-single');
    }
    
}
