@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
{{-- @include('layouts.front.all_policy') --}}
@include('layouts.front.pdfpolicy',['policiesmnls' => $policiesmnls]) 
@include('layouts.front.social')
@endsection