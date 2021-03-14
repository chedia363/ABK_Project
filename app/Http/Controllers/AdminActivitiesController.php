<?php

namespace App\Http\Controllers;

use App\Activities;
use Illuminate\Http\Request;

class AdminActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activities::latest()->paginate(10);
  
        return view('activities.index',compact('activities'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Activities $activities)
    {
        
       
        $activities->create($request->all());
    
    
           
       
        return redirect()->route('activities.index')
                            ->with('success',__('front.created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activities = Activities::where('id', $id)->first();

        return view('activities.show',compact('activities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activities = Activities::where('id', $id)->first();
        
        return view('activities.edit',compact('activities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       $activities = Activities::find($id);
      
       $activities->update($request->all());

        return redirect()->route('activities.index')
                        ->with('success',__('front.updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                
        $activities = Activities::where('id', $id)->first();

        $activities->delete();
  
        return redirect()->route('activities.index')
                        ->with('success',__('front.deleted successfully'));
    }
}
