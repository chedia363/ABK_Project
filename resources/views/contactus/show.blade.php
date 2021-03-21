@extends('layouts.layoutadmin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>@lang('admin.contact us')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contactus.index') }}">@lang('admin.Back')</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('admin.Adress Name'):</strong>
                {{ $contactus->addres_Name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('admin.phone'):</strong>
                {!! $contactus->phoneNmber !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('admin.Fax Number'):</strong>
                {!! $contactus->faxNmber !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('admin.Mobile Number'):</strong>
                {!! $contactus->mobileNmber !!}
            </div>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('admin.Email'):</strong>
                {!! $contactus->email !!}
            </div>
        </div>           
    </div>
@endsection