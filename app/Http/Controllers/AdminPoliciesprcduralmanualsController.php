<?php

namespace App\Http\Controllers;

use App\Policiesprcduralmanuals;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AdminPoliciesprcduralmanualsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policiesprcduralmanuals = Policiesprcduralmanuals::latest()->paginate(10);
  
        return view('policiesprcduralmanuals.index',compact('policiesprcduralmanuals'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('policiesprcduralmanuals.create');
    }

    public function saveImage(UploadedFile $file) : string
    {
        return $file->store('abk_pictures', ['disk' => 'public']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Policiesprcduralmanuals $policiesprcduralmanuals)
    {
        $imagesave = $this->saveImage($request->file('cover'));
        $image = $request->file('cover');
               
        $file_name = $image->getClientOriginalName();
        $policiesprcduralmanuals->create(['name'=>$request->name,'description'=>"",'cover'=>$imagesave, 'file_name'=>$file_name]);
    
    
           
       
        return redirect()->route('policiesprcdural.index')
                            ->with('success',__('front.created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Policiesprcduralmanuals  $policiesprcduralmanuals
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $policiesprcduralmanuals = Policiesprcduralmanuals::where('id', $id)->first();

        return view('policiesprcduralmanuals.show',compact('policiesprcduralmanuals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Policiesprcduralmanuals  $policiesprcduralmanuals
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $policiesprcduralmanuals = Policiesprcduralmanuals::where('id', $id)->first();
        
        return view('policiesprcduralmanuals.edit',compact('policiesprcduralmanuals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Policiesprcduralmanuals  $policiesprcduralmanuals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       
        if ($request->hasFile('cover')){
            $imagesave = $this->saveImage($request->file('cover'));
            $policiesprcduralmanuals = Policiesprcduralmanuals::find($id);
            $policiesprcduralmanuals->cover = $imagesave;
            $image = $request->file('cover');
                   
            $file_name = $image->getClientOriginalName();
            $policiesprcduralmanuals->update(['name'=>$request->name,'description'=>"",'cover'=>$imagesave, 'file_name'=>$file_name]);
        }else{

           
            $policiesprcduralmanuals = Policiesprcduralmanuals::find($id);
           
            $policiesprcduralmanuals->update(['name'=>$request->name,'description'=>""]);            
        }
        return redirect()->route('policiesprcdural.index')
                        ->with('success',__('front.updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Policiesprcduralmanuals  $policiesprcduralmanuals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                
        $policiesprcduralmanuals = Policiesprcduralmanuals::where('id', $id)->first();

        $policiesprcduralmanuals->delete();
  
        return redirect()->route('policiesprcdural.index')
                        ->with('success',__('front.deleted successfully'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
    */
    public function removeImage(Request $request)
    {
        $policiesprcduralmanuals = Policiesprcduralmanuals::where('id', $request->only('field'))->first();
       
        $policiesprcduralmanuals->update(['name'=>$policiesprcduralmanuals->name,'description'=>"",'cover'=>"", 'file_name'=>""]);


        return redirect()->route('policiesprcdural.edit', $request->input('field'))
                        ->with('success',__('front.deleted successfully'));
    }
}
