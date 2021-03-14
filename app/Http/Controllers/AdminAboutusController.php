<?php

namespace App\Http\Controllers;

use App\Aboutus;
use Illuminate\Http\Request;

class AdminAboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutuss = Aboutus::latest()->paginate(10);
  
        return view('aboutus.index',compact('aboutuss'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Aboutus $aboutus)
    {
        
       
        $aboutus->create($request->all());
    
    
           
       
        return redirect()->route('aboutus.index')
                            ->with('success','aboutus created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aboutus = Aboutus::where('id', $id)->first();

        return view('aboutus.show',compact('aboutus'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutus = Aboutus::where('id', $id)->first();
        
        return view('aboutus.edit',compact('aboutus'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       $aboutus = Aboutus::find($id);
      
       $aboutus->update($request->all());

        return redirect()->route('aboutus.index')
                        ->with('success','aboutus updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                
        $aboutus = Aboutus::where('id', $id)->first();

        $aboutus->delete();
  
        return redirect()->route('aboutus.index')
                        ->with('success','aboutus deleted successfully');
    }

}
