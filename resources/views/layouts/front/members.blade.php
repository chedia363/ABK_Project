@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="home"/>
    <meta property="og:title" content="{{ config('app.name') }}"/>
    <meta property="og:description" content="{{ config('app.name') }}"/>
@endsection

@section('content')
@include('layouts.front.lines', ['aboutuss' => $aboutuss]) 
@include('layouts.front.public_association', ['teams' => $teams])
@include('layouts.front.timeline', ['teamsfrst' => $teamsfrst, 'teamssecnd' => $teamssecnd, 'teamsthrd' => $teamsthrd, 'teamsfrth' => $teamsfrth, 'teamsfve' => $teamsfve])
@include('layouts.front.social')
@endsection