<?php

namespace App\Http\Controllers;

use App\Vision;
use Illuminate\Http\Request;

class AdminVisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vision = Vision::latest()->paginate(10);
  
        return view('vision.index',compact('vision'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vision.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Vision $vision)
    {
        
       
        $vision->create($request->all());
    
    
           
       
        return redirect()->route('vision.index')
                            ->with('success',__('front.created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vision = Vision::where('id', $id)->first();

        return view('vision.show',compact('vision'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vision = Vision::where('id', $id)->first();
        
        return view('vision.edit',compact('vision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       $vision = Vision::find($id);
      
       $vision->update($request->all());

        return redirect()->route('vision.index')
                        ->with('success',__('front.updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                
        $vision = Vision::where('id', $id)->first();

        $vision->delete();
  
        return redirect()->route('vision.index')
                        ->with('success',__('front.deleted successfully'));
    }
}
