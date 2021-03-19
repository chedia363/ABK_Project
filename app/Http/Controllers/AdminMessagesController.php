<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class AdminMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Messages::latest()->paginate(10);
  
        return view('messages.index',compact('messages'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Messages $messages)
    {
        
       
        $messages->create($request->all());
    
    
           
       
        return redirect()->route('messages.index')
                            ->with('success',__('front.created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $messages = Messages::where('id', $id)->first();

        return view('messages.show',compact('messages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $messages = Messages::where('id', $id)->first();
        
        return view('messages.edit',compact('messages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       $messages = Messages::find($id);
      
       $messages->update($request->all());

        return redirect()->route('messages.index')
                        ->with('success',__('front.updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                
        $messages = Messages::where('id', $id)->first();

        $messages->delete();
  
        return redirect()->route('messages.index')
                        ->with('success',__('front.deleted successfully'));
    }
}
