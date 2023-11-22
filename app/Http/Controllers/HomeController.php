<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        if(Auth::check())
        {
            return view('pages.home');
        }
        return redirect()->route('login')->with(['error' => 'Silahkan login terlebih dahulu !']);
    } 
}
