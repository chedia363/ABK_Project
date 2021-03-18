<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutus;
use App\Policiesprcduralmanuals;
use App\Teams;
use DB;
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
        // get teams records according to design form
        $teams = DB::table('teams_a_b_k')->limit(3)->get();
        $teamsfrst =  DB::table('teams_a_b_k')->first();
        $teamssecnd =  DB::table('teams_a_b_k')->skip(1)->first();
        $teamsthrd =  DB::table('teams_a_b_k')->skip(2)->first();
        $teamsfrth =  DB::table('teams_a_b_k')->skip(3)->first();
        $teamsfve =  DB::table('teams_a_b_k')->skip(4)->first();        
      


        return view('layouts.front.members', 
        compact(
            'aboutuss',
            'teams',
            'teamsfrst',
            'teamssecnd',
            'teamsthrd',
            'teamsfrth',
            'teamsfve'
        ));
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


    public function Invest()
    {
        // get invests records
        $investus = DB::table('investus_a_b_k')->limit(3)->get();
        return view('layouts.front.invest', compact('investus'));
    }
}
