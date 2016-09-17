@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">


    <div class="widget-wrap">

      <div style="padding-left: 30px; padding-right: 30px; margin-left: 0px; margin-right: 0px;" class="widget-header block-header margin-bottom-0 clearfix">
        <div class="row">
          @include('projects.includes.intro')
          <div class="user-header-right col-xs-12 col-sm-4">
            @include('projects.includes.social')
          </div>
        </div>
      </div>

      <form action="" method="POST" data-parsley-validate>
        <input type="hidden" name="idea" value="{{ Auth::user()->idea->id }}">
        @include('projects.edit.edit-component.forms.organization')
        <hr style="margin-top: 25px; margin-bottom: 25px;">
        <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Update Organization</button>
      </form>

    </div>

  </div>
</div>
@stop


