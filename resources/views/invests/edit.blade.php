@extends('layouts.layoutadmin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit invests</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('invests.index') }}"> Back</a>
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
    <form action="{{ route('invests.update',$invests->id) }}" method="POST" class="form" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
           <div class="form-row">
                   
                   <div class="form-group col-md-6">
                       <label for="name">@lang('admin.Invest Number') </label>
                       <input type="text" name="file_name" id="file_name" placeholder="@lang('admin.Name')" class="form-control" value="{{ $invests->file_name }}" required>
                   </div>
                   
           </div>

       
            @if(isset($invests->cover))
            <div class="form-group">
           
                <img class="img-fluid" src="{{  asset("storage/$invests->cover") }}" style="width: 30%;"></a></span> <br/>
                <a onclick="return confirm('@lang('admin.Are you sure?')')" href="{{ route('remove.imageinvests', ['invests' => $invests->id]) }}" class="btn btn-danger">@lang('admin.Remove image?')</a>
             

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