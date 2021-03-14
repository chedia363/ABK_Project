@extends('layouts.layoutadmin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show program</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('programs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $program->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description:</strong>
                {{ $program->description }}
            </div>
        </div>

        @if(isset($program->cover))
         <div class="form-group">
        
         <img class="img-fluid" src="{{  asset("storage/$program->cover") }}" style="width: 30%;"></a></span> <br/>
         </div>
        @endif
    </div>
@endsection