<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web.beranda');
    }

    public function newsLayout()
    {
        return view('web.news-layout');
    }

    public function single()
    {
        return view('web.blog-single');
    }
    
}
