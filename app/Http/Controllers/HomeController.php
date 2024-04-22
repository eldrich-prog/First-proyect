<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function __invoke()
    {
        return view('homeView'); // This is the only line of code in this file
    }
}
