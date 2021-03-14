@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
@include('layouts.front.activity')
@include('layouts.front.field')
@include('layouts.front.programs')
@include('layouts.front.social')
@endsection