@extends('layouts.front.app',['contactus' => $contactus])

@section('og')
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
@include('layouts.front.bannerhome')
@include('layouts.front.social')
@include('layouts.front.vision', ['vision' => $vision])
@include('layouts.front.messages', ['messages' => $messages])
@include('layouts.front.develop')
@include('layouts.front.partners', ['partners' => $partners])
@include('layouts.front.map')
@endsection