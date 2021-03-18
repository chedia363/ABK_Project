<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutus;
use App\Policiesprcduralmanuals;


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
    public function politics2()
    {
        return view('layouts.front.Policies2');
    }
    public function politics3()
    {
        return view('layouts.front.Policies3');
    }
    public function politics4()
    {
        return view('layouts.front.Policies4');
    }
    public function politics5()
    {
        return view('layouts.front.Policies5');
    }
    public function politics6()
    {
        return view('layouts.front.Policies6');
    }


    public function Invest()
    {
        return view('layouts.front.invest');
    }
}
