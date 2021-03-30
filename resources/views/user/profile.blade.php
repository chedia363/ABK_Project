@extends('layouts.layoutadmin')
   
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>@lang('admin.Edit Profile')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
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
    <form action="{{ route('admin.profile.update',$profile->id) }}" method="POST" class="form" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
           <div class="form-group">
                   
                   <div class="form-group col-md-6">
                       <label for="name">@lang('admin.Name') </label>
                       <input type="text" name="name" id="name" placeholder="@lang('admin.Name')" class="form-control" value="{{ $profile->name }}">
                   </div>
                   
           </div>
          <div class="form-group">
                   
                   <div class="form-group col-md-6">
                       <label for="name">@lang('admin.email') </label>
                       <input type="text" name="email" id="email" placeholder="@lang('admin.email')" class="form-control" value="{{ $profile->email }}">
                   </div>
                   
           </div>


            <div class="form-group">
               <div class="form-group col-md-6">
                <input name="password" type="password" class="form-control" value="" placeholder="xxxxxx">
                 </div>
            </div>



         <div class="row">
       
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form></div>
@endsection