@extends('layouts.app')

@section('content')


<div class="widget-wrap">
  <div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
      <div class="recent-users-list">
        <div class="user-intro">
          <div class="user-thumb"><a href="/project/23"><img style="width: auto; border-radius: 0; padding-right: 15px;" src="{{ $user->profile_picture }}" alt="user"></a></div>
          <div class="users-info">
            <ul>
              <li class="name"><a href="/project/23">{{ $user->name }}</a></li>

              <li class="u-location">{{ $user->companyRole() }} at {{ $user->team()->idea->name }}</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div style="padding-top: 30px;" class="details">
    <div class="form-line form-labels">
      <div class="row">
        <div class="col-xs-12">

        </div>
      </div>
    </div>

    <div class="form-line form-labels">
      <div class="row">
        <div class="col-xs-12">
          <input data-parsley-required data-parsley-minlength="6" type="password" class="form-control input-one" name="password" placeholder="Password">
        </div>
      </div>
    </div>

  </div>

</div>


@stop
