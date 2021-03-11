<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomefrontController extends Controller
{
    public function Abakhome()
    {
        return view('front.index');
    }
}
