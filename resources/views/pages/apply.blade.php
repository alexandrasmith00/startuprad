@extends('layouts.landing')

@section('content')

@include('pages.landing.header')
@include('pages.landing.navbar')

<main role="main">
  @include('pages.landing.about')
</main>

@stop
