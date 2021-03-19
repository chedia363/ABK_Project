@extends('layouts.front.app',['contactus' => $contactus])

@section('og')
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
@include('layouts.front.bannerhome')
@include('layouts.front.social')
@include('layouts.front.vision')
@include('layouts.front.messages')
@include('layouts.front.develop')
@include('layouts.front.partners')
@include('layouts.front.map')
@endsection