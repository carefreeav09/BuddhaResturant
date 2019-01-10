<?php

namespace App\Http\Controllers;

use App\About;
use App\Heroes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicViewController extends Controller
{

    public function index()
    {
        $hero = Heroes::all()->last();
        $abouts= About::all()->last();

        return view('welcome', compact('hero', 'abouts'));
    }
}

