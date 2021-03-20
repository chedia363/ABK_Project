@extends('layouts.layoutadmin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>@lang('admin.Show invests')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('invests.index') }}">@lang('admin.Back')</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('admin.Invest Number')</strong>
                {{ $invests->file_name }}
            </div>
        </div>
   
       <strong>@lang('admin.Invest Picture')</strong>
        @if(isset($invests->cover))
         <div class="form-group">
        
         <img class="img-fluid" src="{{  asset("storage/$invests->cover") }}" style="width: 30%;"></a></span> <br/>
         </div>
        @endif
    </div>
@endsection