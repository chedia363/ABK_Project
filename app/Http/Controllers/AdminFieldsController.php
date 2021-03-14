<?php

namespace App\Http\Controllers;

use App\Fields;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AdminFieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = Fields::latest()->paginate(10);
  
        return view('fields.index',compact('fields'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fields.create');
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
    public function store(Request $request, Fields $field)
    {
        $imagesave = $this->saveImage($request->file('cover'));
        $image = $request->file('cover');
               
        $file_name = $image->getClientOriginalName();
        $field->create(['name'=>$request->name,'description'=>$request->description,'cover'=>$imagesave, 'file_name'=>$file_name]);
    
    
           
       
        return redirect()->route('fields.index')
                            ->with('success','Field created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fields  $fields
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fields = Fields::where('id', $id)->first();

        return view('fields.show',compact('fields'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fields  $fields
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fieldss = Fields::where('id', $id)->first();
        
        return view('fields.edit',compact('fieldss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fields  $fields
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       

        $imagesave = $this->saveImage($request->file('cover'));
        $fieldss = Fields::find($id);
        $fieldss->cover = $imagesave;
       $image = $request->file('cover');
               
        $file_name = $image->getClientOriginalName();
       $fieldss->update(['name'=>$request->name,'description'=>$request->description,'cover'=>$imagesave, 'file_name'=>$file_name]);

        return redirect()->route('fields.index')
                        ->with('success','field updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fields  $fields
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                
        $fields = Fields::where('id', $id)->first();

        $fields->delete();
  
        return redirect()->route('fields.index')
                        ->with('success','field deleted successfully');
    }

        /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeImage(Request $request)
    {
        $fieldss = Fields::where('id', $request->only('field'))->first();
        // $fieldss->delete();
        $fieldss->update(['name'=>$fieldss->name,'description'=>$fieldss->description,'cover'=>"", 'file_name'=>""]);


        return redirect()->route('fields.edit', $request->input('field'))
                        ->with('success','Image deleted successfully');
    }
}
