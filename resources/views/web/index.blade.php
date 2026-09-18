@extends('web.layout.app')
@section('title', 'home page')

@stack('style')
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">

   
@section('content')

@include('web.home.hero')
@include('web.home.about')
@include('web.home.main')
@include('web.home.notice')
@include('web.home.course')
@include('web.home.placement')
@endsection