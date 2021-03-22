<?php

namespace App\Http\Controllers;

use App\Programs;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AdminProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Programs::latest()->paginate(10);
  
        return view('programs.index',compact('programs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create');
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
    public function store(Request $request, Programs $program)
    {
        $imagesave = $this->saveImage($request->file('cover'));
        $image = $request->file('cover');
               
        $file_name = $image->getClientOriginalName();
        $file_size = getimagesize($image);
        $width = $file_size[0];
        $height= $file_size[1];
        
        if($width != 800 && $height != 665 ){
            return redirect()->route('programs.index')
                                ->with('message','image depassed maximum size(800X665)');        
        }else{

           $program->create(['name'=>$request->name,'description'=>$request->description,'cover'=>$imagesave, 'file_name'=>$file_name]);  
        
          return redirect()->route('programs.index')
                 ->with('success',__('front.created successfully.'));        

        }
   
           
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program = Programs::where('id', $id)->first();

        return view('programs.show',compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Programs::where('id', $id)->first();
        
        return view('programs.edit',compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       
       if ($request->hasFile('cover')){
          $imagesave = $this->saveImage($request->file('cover'));
          $program = Programs::find($id);
          $program->cover = $imagesave;
          $image = $request->file('cover');
                  
           $file_name = $image->getClientOriginalName();
          $program->update(['name'=>$request->name,'description'=>$request->description,'cover'=>$imagesave, 'file_name'=>$file_name]);

        }else{

         
          $program = Programs::find($id);
         
          $program->update(['name'=>$request->name,'description'=>$request->description]);

       }

        return redirect()->route('programs.index')
                        ->with('success','field updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                
        $program = Programs::where('id', $id)->first();

        $program->delete();
  
        return redirect()->route('programs.index')
                        ->with('success','field deleted successfully');
    }


     /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeImage(Request $request)
    {
        $program = Programs::where('id', $request->only('program'))->first();
       
        $program->update(['name'=>$program->name,'description'=>$program->description,'cover'=>"", 'file_name'=>""]);


        return redirect()->route('programs.edit', $request->input('program'))
                        ->with('success','Image deleted successfully');
    }

}
