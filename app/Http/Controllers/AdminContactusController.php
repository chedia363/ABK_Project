<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;

class AdminContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactus = Contactus::latest()->paginate(10);
  
        return view('contactus.index',compact('contactus'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Contactus $contactus)
    {
        
       
        $contactus->create($request->all());
    
    
       
       
        return redirect()->route('contactus.index')
                            ->with('success',__('front.created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactus = Contactus::where('id', $id)->first();

        return view('contactus.show',compact('contactus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactus = Contactus::where('id', $id)->first();
        
        return view('contactus.edit',compact('contactus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       $contactus = Contactus::find($id);
      
       $contactus->update($request->all());

        return redirect()->route('contactus.index')
                        ->with('success',__('front.updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                
        $contactus = Contactus::where('id', $id)->first();

        $contactus->delete();
  
        return redirect()->route('contactus.index')
                        ->with('success',__('front.deleted successfully'));
    }
}
