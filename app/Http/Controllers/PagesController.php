<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage()
    {
        $page = 'homepage';
        return view('pages.homepage', compact('page'));
    }

    public function about()
    {
        $page = 'about';
        return view('pages.about', compact('page'));
    }
}
