<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretController extends Controller
{
    public function secretPage()
    {
        return '<strong>This is secret page</strong>';
    }

    public function showMeSecret()
    {
        $url = route('secret');
        $link = '<a href="'. $url .'">Go to secret page.</a>';
        // return redirect()->route('secret');
        return $link;
    }
}
