<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $bannerImage = asset('images/home-bg.webp');
        return view('home', compact('bannerImage') );
    }

    public function about()
    {

        $bannerImage = asset('images/about-bg.jpg');
        return view('about', compact('bannerImage') );
    }

}
