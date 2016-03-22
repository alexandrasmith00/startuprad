@extends('layouts.outside')

@section('content')

<form  id="form-logins"  class="j-forms" role="form" method="POST" action="{{ url('/password/email') }}" novalidate>

  <div class="login-form-header">
    <div class="logo">
        <a href="/" title="Startup RAD">Startup RAD</a>
    </div>
  </div>

  <div class="login-form-content">
    <!-- start login -->
    <div class="unit">
        <div class="input login-input form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="icon-left" for="login">
                <i class="zmdi zmdi-account"></i>
            </label>
            <input class="form-control login-frm-input"  type="email" id="login" name="email" value="{{ old('email') }}" placeholder="Email">


            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        </div>
    </div>
    <!-- end login -->
  </div>
  <div class="login-form-footer">
    <button type="submit" class="btn-block btn btn-primary">Send Password Reset Link</button>
  </div>



</form>

@endsection
