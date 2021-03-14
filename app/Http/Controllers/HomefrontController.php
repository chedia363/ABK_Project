<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomefrontController extends Controller
{
    public function Abakhome()
    {
        return view('front.index');
    }
    public function initiative()
    {
        return view('layouts.front.initiative');
    }
    public function members()
    {
        return view('layouts.front.members');
    }
    public function politics()
    {
        return view('layouts.front.Policies');
    }
}
