@extends('layouts.layoutadmin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>@lang('admin.about us')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('activities.index') }}">@lang('admin.Back')</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('admin.Name:')</strong>
                {{ $activities->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('admin.Description:')</strong>
                {!! $activities->description !!}
            </div>
        </div>

    
    </div>
@endsection