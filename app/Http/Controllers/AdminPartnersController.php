<?php

namespace App\Http\Controllers;

use App\Partners;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AdminPartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partners::latest()->paginate(10);
  
        return view('partners.index',compact('partners'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.create');
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
    public function store(Request $request, Partners $partners)
    {
        $imagesave = $this->saveImage($request->file('cover'));
       
        $partners->create(['cover'=>$imagesave]);
    
    
           
       
        return redirect()->route('partners.index')
                            ->with('success',__('front.created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partners = Partners::where('id', $id)->first();

        return view('partners.show',compact('partners'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partners = Partners::where('id', $id)->first();
        
        return view('partners.edit',compact('partners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       
       if ($request->hasFile('cover')){
          $imagesave = $this->saveImage($request->file('cover'));
          $partners = Partners::find($id);
          $partners->cover = $imagesave;
         
          $partners->update(['cover'=>$imagesave]);

    //     }else{

         
    //       $partners = Invests::find($id);
         
    //       $partners->update(['cover'=>$partners->cover]);

       }

        return redirect()->route('partners.index')
                        ->with('success',__('front.updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                
        $partners = Partners::where('id', $id)->first();

        $partners->delete();
  
        return redirect()->route('partners.index')
                        ->with('success',__('front.deleted successfully'));
    }

        /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeImage(Request $request)
    {
        $partners = Partners::where('id', $request->only('partners'))->first();
       
        $partners->update(['file_name'=>$partners->file_name,'cover'=>""]);


        return redirect()->route('partners.edit', $request->input('partners'))
                        ->with('success',__('front.deleted successfully'));
    }
    
}
