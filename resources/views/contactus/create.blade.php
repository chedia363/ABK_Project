@extends('layouts.layoutadmin')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>@lang('admin.Add contactus')</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('contactus.index') }}">@lang('admin.Back')</a>
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
   
<form action="{{ route('contactus.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('admin.Adress Name')</strong>
                <input type="text" name="addres_Name" class="form-control" placeholder="@lang('admin.Name')" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

          <div class="form-group">
  
              <strong>@lang('admin.phone')</strong>
              <input name="phoneNmber" type="text" class="form-control" placeholder="@lang('admin.phone')" required>
          
          </div>
           
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

          <div class="form-group">
  
              <strong>@lang('admin.Fax Number')</strong>
              <input name="faxNmber" type="text" class="form-control" placeholder="@lang('admin.Fax Number')" required>
          
          </div>
           
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

          <div class="form-group">
  
              <strong>@lang('front.mobile Number')</strong>
              <input name="mobileNmber" type="text" class="form-control" placeholder="@lang('admin.Mobile Number')" required>
          
          </div>
           
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12">

          <div class="form-group">
  
              <strong>@lang('admin.Email'):</strong>
              <input name="email" type="email" class="form-control" placeholder="@lang('admin.Email')" required>
          
          </div>
           
        </div>         
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">@lang('admin.Submit')</button>
        </div>
    </div>
   
</form>
@endsection
