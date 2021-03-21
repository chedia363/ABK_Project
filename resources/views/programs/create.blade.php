@extends('layouts.layoutadmin')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>@lang('admin.Add New program')</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('programs.index') }}">@lang('admin.Back')</a>
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
   
<form action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('admin.Name:')</strong>
                <input type="text" name="name" class="form-control" placeholder="@lang('admin.Name')" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('admin.Description:')</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="@lang('admin.Description:')" required></textarea>
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