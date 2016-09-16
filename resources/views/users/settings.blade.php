@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">


      <div class="widget-wrap">
        <div class="widget-header block-header margin-bottom-0 clearfix">
          <div class="pull-left">
            <div class="recent-users-list">
              <div class="user-intro">
                <div class="user-thumb"><a><img style="width: auto; border-radius: 0; padding-right: 15px;" src="{{ $user->profile_picture }}" alt="user"></a></div>
                <div class="users-info">
                  <ul>
                    <li class="name"><a>{{ $user->name }}</a></li>
                    <li class="u-location">{{ $user->companyRole() }} at {{ $user->team()->idea->name }}</li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>

        <form action="{{ route('update-settings')}}" method="POST" data-parsley-validate>
          @include('users.settings.account')
          <hr style="margin-top: 25px; margin-bottom: 25px;">
          @include('users.settings.social')
          <hr style="margin-top: 25px; margin-bottom: 25px;">

          @if ($user->isStudent() )
            @include('users.settings.student')
            <hr style="margin-top: 25px; margin-bottom: 25px;">
          @endif

          <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Update Settings</button>
        </form>

      </div>

  </div>
</div>
@stop
