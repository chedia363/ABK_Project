@extends('layouts.layoutadmin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Program</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('programs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="box">
    <form action="{{ route('programs.update',$program->id) }}" method="POST" class="form" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
           <div class="form-row">
                   
                   <div class="form-group col-md-6">
                       <label for="name">@lang('admin.Name') </label>
                       <input type="text" name="name" id="name" placeholder="@lang('admin.Name')" class="form-control" value="{{ $program->name }}" required>
                   </div>
                   
           </div>

           <div class="form-row">
                   
                   <div class="form-group col-md-12">
                       <label for="name">@lang('admin.description') </label>
                       <input type="text" name="description" id="description" placeholder="@lang('admin.description')" class="form-control" value="{{ $program->description }}" required>
                   </div>
           </div>

            @if(isset($program->cover))
            <div class="form-group">
           
                <img class="img-fluid" src="{{  asset("storage/$program->cover") }}" style="width: 30%;"></a></span> <br/>
                <a onclick="return confirm('@lang('admin.Are you sure?')')" href="{{ route('remove.imageprogram', ['program' => $program->id]) }}" class="btn btn-danger">@lang('admin.Remove image?')</a>
             

            </div>

            @endif


            <div class="form-group">
                <label for="cover">@lang('admin.Cover') </label>
                <input type="file" name="cover" id="cover" class="form-control" >
            </div> 
         <div class="row">
       
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form></div>
@endsection