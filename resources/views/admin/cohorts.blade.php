@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">
    <div class="widget-wrap">


      <form action="" method="POST" data-parsley-validate>
        @include('admin.includes.invite-team')
        <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Add Team</button>
      </form>
      <hr>



      @foreach ($cohorts as $cohort)
      <div style="padding-top: 30px;" class="details">
        <h4>{{ $cohort->name }}</h4><br>

        <div class="row">
          <div class="col-xs-12  col-sm-10 col-sm-offset-1">
            <div class="form-line form-labels">
              <div class="row">
                <div class="col-xs-4">
                  <b><p>Students</p></b>
                  @foreach ($cohort->users as $user)
                    @if ($user->hasRole('Student') && ! ($user->isStaff() ))
                      <p><a href="{{ route('profile', ['id' => $user->id ]) }}">{{ $user->name }}</a></p>
                    @endif
                  @endforeach
                </div>
                <div class="col-xs-4">
                  <b><p>Staff</p></b>
                  @foreach ($cohort->users as $user)
                      @if ($user->isStaff()) <p>{{ $user->name }}</p> @endif
                  @endforeach
                </div>
                <div class="col-xs-4">
                  <b><p>Advisors</p></b>
                  @foreach ($cohort->users as $user)
                    @if ($user->hasRole('advisors')) <p>{{ $user->name }}</p> @endif
                  @endforeach
                </div>
              </div>

            </div>
          </div>
        </div>
        <hr>

      </div>
      @endforeach
    </div>



  </div>
</div>

@stop
