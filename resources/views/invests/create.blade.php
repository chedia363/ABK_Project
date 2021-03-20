@extends('layouts.layoutadmin')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>@lang('admin.Create New invest')</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('invests.index') }}">@lang('admin.Back')</a>
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
   
<form action="{{ route('invests.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('admin.Invest Number')</strong>
                <input type="text" name="file_name" class="form-control" placeholder="@lang('admin.Invest Number')" required>
            </div>
        </div>
  
        <div class="form-group">
            <label for="cover">@lang('admin.Cover') </label>
            <input type="file" name="cover" id="cover" class="form-control" required>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">@lang('admin.Submit')</button>
        </div>
    </div>
   
</form>
@endsection