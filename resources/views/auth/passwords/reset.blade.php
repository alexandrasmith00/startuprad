
@extends('layouts.outside')

@section('content')

<form class="form-inline" method="POST" action="{{ url('/password/reset') }}" data-parsley-validate>

  <h3>Create a new password</h3>
  <p class="section-description">Enter your new password.</p>

  <input type="hidden" name="token" value="{{ $token }}">

  <div class="form-line form-labels">
    <div class="row">
      <div class="col-xs-12">
        <input data-parsley-required id="login" type="email" class="form-control input-one" name="email" placeholder="Email Address" value="{{ $email or old('email') }}">
      </div>
    </div>
  </div>

  <div class="form-line form-labels">
    <div class="row">
      <div class="col-xs-12">
        <input data-parsley-required data-parsley-minlength="6" type="password" id="pass" class="form-control input-one" name="password" placeholder="Password">
      </div>
    </div>
  </div>


  <div class="form-line form-labels">
    <div class="row">
      <div class="col-xs-12">
        <input data-parsley-required data-parsley-minlength="6" data-parsley-equalto="#pass" type="password" class="form-control input-one" name="password_confirmation" placeholder="Password Confirmation">
      </div>
    </div>
  </div>

  @if (Session::has('errors'))
  <div style="margin-bottom: 25px; text-align: center;" class="link">
    {{ $errors->first() }} <a  href="{{ url('/password/reset') }}" class="link">Try resending the link.</a>
  </div>
  @endif



  <button class="btn oversized-btn btn-blue" type="submit">Reset Password</button>
</form>

@stop
