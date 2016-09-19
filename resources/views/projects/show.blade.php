@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">
    <div class="widget-wrap">

      @include('projects.includes.header')

      @include('projects.sections.general', ['edit' => false ])
      <hr style="margin-top: 25px; margin-bottom: 25px;">

      @include('projects.sections.social', ['edit' => false ])
      <hr style="margin-top: 25px; margin-bottom: 25px;">

      @include('projects.sections.team', ['edit' => false ])
      <hr style="margin-top: 25px; margin-bottom: 25px;">

      @include('projects.sections.organization', ['edit' => false ])
      <hr style="margin-top: 25px; margin-bottom: 25px;">

      @include('projects.sections.value', ['edit' => false ])
      <hr style="margin-top: 25px; margin-bottom: 25px;">

      @include('projects.sections.strategy', ['edit' => false ])


    </div>
  </div>
</div>
@stop
