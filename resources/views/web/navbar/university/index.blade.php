@extends('web.layout.app')
@section('title', 'home page')

@stack('style')
 <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

   
@section('content')

@include('web.navbar.university.hero')
@include('web.navbar.university.about')
@include('web.navbar.university.state')
@include('web.navbar.university.program')
@include('web.navbar.university.know')
@include('web.navbar.university.future')
@endsection