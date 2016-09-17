@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">


    <div class="widget-wrap">
      <div style="padding-left: 30px; padding-right: 30px; margin-left: 0px; margin-right: 0px;" class="widget-header block-header margin-bottom-0 clearfix">

        <div class="row">
          <div class="user-header-left col-xs-12 col-sm-8">
            <div class="user-intro">
              <div class="user-thumb"><a href=""><img src="{{{ $idea->logo ? $idea->logo : '' }}}" alt="user"></a></div>
              <div class="users-info">
                <ul>
                  <li class="name"><a>{{ $idea->name }}</a></li>
                  <li class="u-location">{{{ $idea->location() ? $idea->location() : "Company Location"}}}</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="user-header-right col-xs-12 col-sm-4">
            @include('projects.includes.social')
          </div>
        </div>
      </div>

      <form action="" method="POST" data-parsley-validate>
        <input type="hidden" name="idea" value="{{ Auth::user()->idea->id }}">
        @include('projects.edit.edit-component.forms.social')
        <hr style="margin-top: 25px; margin-bottom: 25px;">

        <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Update Social</button>
      </form>

    </div>

  </div>
</div>
@stop

