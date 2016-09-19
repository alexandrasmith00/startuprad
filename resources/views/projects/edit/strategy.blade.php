@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">
    <div class="widget-wrap">

      @include('projects.includes.header')

      <form action="" method="POST" data-parsley-validate>
        <input type="hidden" name="idea" value="{{ Auth::user()->idea->id }}">
        @include('projects.edit.forms.strategy')
        <hr style="margin-top: 25px; margin-bottom: 25px;">
        <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Update Strategy</button>
      </form>

    </div>
  </div>
</div>
@stop


