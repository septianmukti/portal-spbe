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

    public function kebijakanSPBE()
    {
        return view('web.kebijakan-spbe');
    }

    public function tataKelolaSPBE()
    {
        return view('web.tata-kelola-spbe');
    }

    public function manajemenSPBE()
    {
        return view('web.manajemen-spbe');
    }

    public function layananSPBE()
    {
        return view('web.layanan-spbe');
    }

}
