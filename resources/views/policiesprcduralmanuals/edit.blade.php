@extends('layouts.layoutadmin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('policiesprcdural.index') }}"> Back</a>
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
    <form action="{{ route('policiesprcdural.update',$policiesprcduralmanuals->id) }}" method="POST" class="form" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
           <div class="form-row">
                   
                   <div class="form-group col-md-6">
                       <label for="name">@lang('admin.Name') </label>
                       <input type="text" name="name" id="name" placeholder="@lang('admin.Name')" class="form-control" value="{{ $policiesprcduralmanuals->name }}">
                   </div>
                   
           </div>

      

            @if(isset($policiesprcduralmanuals->cover))
            <div class="form-group">
            {{ $policiesprcduralmanuals->file_name }}
            <a class="img-fluid" href="{{  asset("storage/$policiesprcduralmanuals->cover") }}"><button type="button" class="btn btn-warning  btn-md"><i class="fa fa-download"></i></button></a></span> <br/>
                <a onclick="return confirm('@lang('admin.Are you sure?')')" href="{{ route('remove.imagepolicies', ['field' => $policiesprcduralmanuals->id]) }}" class="btn btn-danger">@lang('admin.Remove image?')</a>
            </div>
            @endif


            <div class="form-group">
                <label for="cover">@lang('admin.Cover') </label>
                <input type="file" name="cover" id="cover" class="form-control">
            </div> 
         <div class="row">
       
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form></div>
@endsection