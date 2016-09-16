@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">

    <div class="widget-wrap">
      <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="row">
          <div class="user-header-left col-xs-12 col-sm-7">

            <div class="user-intro">
              <div class="user-thumb"><a href=""><img src="{{ $user->profile_picture }}" alt="user"></a></div>
              <div class="users-info">
                <ul>
                  <li class="name"><a href="{{ route('profile', ['id' => $user->id ]) }}">{{ $user->name }}</a></li>
                  <li class="u-location">{{ $user->companyRole() }} at {{ $user->team()->idea->name }}</li>
                </ul>
              </div>
            </div>
          </div>

          @if ($user->social)
          <div class="user-header-right col-xs-12 col-sm-5">
            <div class="user-intro">
              <ul class="profile-social-links">
                <li><a href='{{ $user->email }}'><i class="fa fa-lg fa-envelope blue"></i></a></li>
                @if ($user->social->linkedin)
                  <li><a href='{{ $user->social->linkedin }}'><i class="fa fa-lg fa-linkedin blue"></i></a></li>
                @endif
                @if ($user->social->facebook)
                  <li><a href='{{ $user->social->facebook }}'><i class="fa fa-lg fa-facebook blue"></i></a></li>
                @endif
                @if ($user->social->twitter)
                  <li><a href='{{ $user->social->twitter }}'><i class="fa fa-lg fa-twitter blue"></i></a></li>
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


@stop
