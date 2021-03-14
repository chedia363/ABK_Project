@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
@include('layouts.front.lines')
@include('layouts.front.public_association')
@include('layouts.front.timeline')
@include('layouts.front.social')
@endsection