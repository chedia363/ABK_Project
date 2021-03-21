@extends('layouts.layoutadmin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>@lang('admin.Show partners')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('partners.index') }}">@lang('admin.Back')</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    
   
       <strong>@lang('admin.Partner')</strong>
        @if(isset($partners->cover))
         <div class="form-group">
        
         <img class="img-fluid" src="{{  asset("storage/$partners->cover") }}" style="width: 30%;"></a></span> <br/>
         </div>
        @endif
    </div>
@endsection