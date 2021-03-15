<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutus;


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
        $aboutuss = Aboutus::first();
        
        return view('layouts.front.members', compact('aboutuss'));
    }
    public function politics()
    {
        return view('layouts.front.Policies');
    }
    public function Invest()
    {
        return view('layouts.front.invest');
    }
}
