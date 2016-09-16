@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">

    <div class="widget-wrap">
      <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="row">
          <div class="col-xs-6 pull-left">
            <div class="recent-users-list">
              <div class="user-intro">
                <div class="user-thumb"><a href="{{ route('profile', ['id' => $user->id ]) }}"><img style="width: auto; border-radius: 0; padding-right: 15px;" src="{{ $user->profile_picture }}" alt="user"></a></div>
                <div class="users-info">
                  <ul>
                    <li class="name"><a href="{{ route('profile', ['id' => $user->id ]) }}">{{ $user->name }}</a></li>

                    <li class="u-location">{{ $user->companyRole() }} at {{ $user->team()->idea->name }}</li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
          @if ($user->social)
          <div style="Text-align: right;" class="col-xs-6 pull-right">

            <div class="user-intro">
              <ul class="profile-social-links">
                @if ($user->social->linkedin)
                  <li><a href='{{ $user->social->linkedin }}'><i class="fa fa-2x fa-linkedin blue"></i></a></li>
                @endif
                @if ($user->social->facebook)
                  <li><a href='{{ $user->social->facebook }}'><i class="fa fa-2x fa-facebook blue"></i></a></li>
                @endif
                @if ($user->social->twitter)
                  <li><a href='{{ $user->social->twitter }}'><i class="fa fa-2x fa-twitter blue"></i></a></li>
                @endif
              </ul>
            </div>

          </div>
          @endif
        </div>
      </div>


      @if ($user->student)
        @include('users.profile.team')
      @endif

      @if ($user->student)
        @include('users.profile.student')
      @endif
    </div>
  </div>
</div>

@stop
