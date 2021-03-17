@extends('layouts.layoutadmin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('policiesprcdural.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $policiesprcduralmanuals->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>file Name:</strong>
                {{ $policiesprcduralmanuals->file_name }}
            </div>
        </div>
       
        @if(isset($policiesprcduralmanuals->cover))
         <td><span ><a href="{{  asset("storage/$policiesprcduralmanuals->cover") }}" target="_blank"><button type="button" class="btn btn-warning  btn-md"><i class="fa fa-download"></i></button></a></span>
         </td>
        @endif

  
    </div>
@endsection