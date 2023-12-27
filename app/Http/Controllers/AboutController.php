<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = "About Page"; 
        $about2 = "About Page 2";
        return view('about.index', compact('about', 'about2'));
    }
}
