<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutus;
use App\Policiesprcduralmanuals;
use App\Teams;
use App\Contactus;
use DB;
class HomefrontController extends Controller
{
    public function Abakhome()
    {
        $contactus = Contactus::first();
        return view('front.index', compact('contactus'));
    }
    public function initiative()
    {
        $activities = DB::table('activities')->limit(4)->get();
        $fields = DB::table('fields')->limit(5)->get();
        $fieldsScnd = DB::table('fields')->skip(5)->take(5)->get();
        $programs = DB::table('programs')->limit(4)->get();
        $contactus = Contactus::first();
        return view('layouts.front.initiative', compact(
           'activities',
           'fields',
           'fieldsScnd',
           'programs',
           'contactus'

        ));
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
      $contactus = Contactus::first();


        return view('layouts.front.members', 
        compact(
            'aboutuss',
            'teams',
            'teamsfrst',
            'teamssecnd',
            'teamsthrd',
            'teamsfrth',
            'teamsfve',
            'contactus'
        ));
    }

    public function politics()
    {
        $contactus = Contactus::first();
        return view('layouts.front.Policies', compact('contactus'));
    }
    public function politics2()
    {
        $contactus = Contactus::first();
        return view('layouts.front.Policies2', compact('contactus'));
    }
    public function politics3()
    {
        $contactus = Contactus::first();
        return view('layouts.front.Policies3', compact('contactus'));
    }
    public function politics4()
    {
        $contactus = Contactus::first();
        return view('layouts.front.Policies4', compact('contactus'));
    }
    public function politics5()
    {
        $contactus = Contactus::first();
        return view('layouts.front.Policies5', compact('contactus'));
    }
    public function politics6()
    {
        $contactus = Contactus::first();
        return view('layouts.front.Policies6', compact('contactus'));
    }


    public function Invest()
    {
        // get invests records
        $investus = DB::table('investus_a_b_k')->limit(3)->get();
         $contactus = Contactus::first();
        return view('layouts.front.invest', compact('investus', 'contactus'));
    }
}
