<?php

namespace App\Http\Controllers;

use App\Teams;
use Illuminate\Http\Request;

class AdminTeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Teams::latest()->paginate(10);
  
        return view('teams.index',compact('teams'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Teams $teams)
    {
        
       
        $teams->create($request->all());
    
    
           
       
        return redirect()->route('teams.index')
                            ->with('success',__('front.created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teams = Teams::where('id', $id)->first();

        return view('teams.show',compact('teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams = Teams::where('id', $id)->first();
        
        return view('teams.edit',compact('teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       $teams = Teams::find($id);
      
       $teams->update($request->all());

        return redirect()->route('teams.index')
                        ->with('success',__('front.updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                
        $teams = Teams::where('id', $id)->first();

        $teams->delete();
  
        return redirect()->route('teams.index')
                        ->with('success',__('front.deleted successfully'));
    }
}
