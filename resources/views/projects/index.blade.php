@extends('layouts.app')


@section('content')

    
<section class="main-container">
  <div class="container">
      
    @foreach (Auth::user()->cohorts as $cohort)
      
      @include('projects.includes.users-table')
      
    @endforeach


    </div>
</section>

@stop
