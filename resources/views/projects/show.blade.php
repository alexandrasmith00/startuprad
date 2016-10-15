@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-6  col-sm-12">
    <div class="widget-wrap">
      @include('projects.includes.header')
    </div>

    @include('includes.posts.make', ["placeholder" => "Ask a question or share something interesting...", 'button' => 'Get feedback now', 'isYours' => true])

    @include('includes.posts.all')

  </div>
  <div class="col-md-6  col-sm-12">
    <div class="widget-wrap">

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
