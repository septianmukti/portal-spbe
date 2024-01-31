<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $layanan = Layanan::all();
        return view('pages.layanan', ['layanan' => $layanan]);
    }

    public function post()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
