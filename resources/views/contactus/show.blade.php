@extends('layouts.layoutadmin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> contact us</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contactus.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('front.Adress Name'):</strong>
                {{ $contactus->addres_Name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('front.phone'):</strong>
                {!! $contactus->phoneNmber !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('front.Fax Number'):</strong>
                {!! $contactus->faxNmber !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('front.Mobile Number'):</strong>
                {!! $contactus->mobileNmber !!}
            </div>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('front.Email'):</strong>
                {!! $contactus->email !!}
            </div>
        </div>           
    </div>
@endsection