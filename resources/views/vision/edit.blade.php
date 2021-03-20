@extends('layouts.layoutadmin')   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>@lang('admin.Edit form')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vision.index') }}">@lang('admin.Back')</a>
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
    <form action="{{ route('vision.update',$vision->id) }}" method="POST" class="form" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
           <div class="form-row">
                   
                   <div class="form-group col-md-6">
                       <label for="name">@lang('admin.Name') </label>
                       <input type="text" name="name" id="name" placeholder="@lang('admin.Name')" class="form-control" value="{{ $vision->name }}" required>
                   </div>
                   
           </div>

           <div class="form-row">
                   
                   <div class="form-group col-md-12">
                       <label for="name">@lang('admin.Description')</label>
                       <textarea class="form-control" name="description" id="description" rows="5" placeholder="@lang('admin.Description')" required>{!! $vision->description !!}</textarea>

                   </div>
           </div>



         <div class="row">
       
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">@lang('admin.Submit')</button>
            </div>
        </div>
   
    </form></div>
@endsection