<?php

namespace App\Http\Controllers;

use App\Invests;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AdminInvestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invests = Invests::latest()->paginate(10);
  
        return view('invests.index',compact('invests'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invests.create');
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
    public function store(Request $request, Invests $invests)
    {
        $imagesave = $this->saveImage($request->file('cover'));
       
        $invests->create(['file_name'=>$request->file_name,'cover'=>$imagesave]);
    
    
           
       
        return redirect()->route('invests.index')
                            ->with('success',__('front.created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invests  $invests
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invests = Invests::where('id', $id)->first();

        return view('invests.show',compact('invests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invests  $invests
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invests = Invests::where('id', $id)->first();
        
        return view('invests.edit',compact('invests'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invests  $invests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       
       if ($request->hasFile('cover')){
          $imagesave = $this->saveImage($request->file('cover'));
          $invests = Invests::find($id);
          $invests->cover = $imagesave;
         
          $invests->update(['file_name'=>$request->file_name,'cover'=>$imagesave]);

        }else{

         
          $invests = Invests::find($id);
         
          $invests->update(['file_name'=>$request->file_name]);

       }

        return redirect()->route('invests.index')
                        ->with('success',__('front.updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invests  $invests
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                
        $invests = Invests::where('id', $id)->first();

        $invests->delete();
  
        return redirect()->route('invests.index')
                        ->with('success',__('front.deleted successfully'));
    }

        /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeImage(Request $request)
    {
        $invests = Invests::where('id', $request->only('invests'))->first();
       
        $invests->update(['file_name'=>$invests->file_name,'cover'=>""]);


        return redirect()->route('invests.edit', $request->input('invests'))
                        ->with('success',__('front.deleted successfully'));
    }
}
