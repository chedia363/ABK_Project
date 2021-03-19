@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
@include('layouts.front.activity', ['activities' => $activities])
@include('layouts.front.field', ['fields' => $fields, 'fieldsScnd' => $fieldsScnd])
@include('layouts.front.programs', ['programs' => $programs])
@include('layouts.front.social')
@endsection