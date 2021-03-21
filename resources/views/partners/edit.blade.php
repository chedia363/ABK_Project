@extends('layouts.layoutadmin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>@lang('admin.Edit partner')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('partners.index') }}">@lang('admin.Back')</a>
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
    <form action="{{ route('partners.update',$partners->id) }}" method="POST" class="form" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
        

       
            @if(isset($partners->cover))
            <div class="form-group">
           
                <img class="img-fluid" src="{{  asset("storage/$partners->cover") }}" style="width: 30%;"></a></span> <br/>
                <a onclick="return confirm('@lang('admin.Are you sure?')')" href="{{ route('remove.imagepartners', ['partners' => $partners->id]) }}" class="btn btn-danger">@lang('admin.Remove image?')</a>
             

            </div>

            @endif


            <div class="form-group">
                <label for="cover">@lang('admin.Cover') </label>
                <input type="file" name="cover" id="cover" class="form-control" >
            </div> 
         <div class="row">
       
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">@lang('admin.Submit')</button>
            </div>
        </div>
   
    </form></div>
@endsection