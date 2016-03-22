@extends('layouts.outside')

@section('content')

<form  id="form-logins"  class="j-forms" role="form" method="POST" action="{{ url('/password/reset') }}" novalidate>

  <div class="login-form-header">
    <div class="logo">
        <a href="/" title="Startup RAD">Startup RAD</a>
    </div>
  </div>

  <div class="login-form-content">
    <!-- start login -->
    <div class="unit">
        <div class="input login-input form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            
            <input type="hidden" name="token" value="{{ $token }}">
            
            <label class="icon-left" for="login">
                <i class="zmdi zmdi-account"></i>
            </label>
            <input class="form-control login-frm-input"  type="email" id="login" name="email" value="{{ $email or old('email') }}" placeholder="Email">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        </div>
    </div>
    <!-- end login -->

    <!-- start password -->
    <div class="unit">
        <div class="input login-input form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="icon-left" for="password">
                <i class="zmdi zmdi-key"></i>
            </label>
            <input class="form-control login-frm-input"  type="password" id="password" name="password" placeholder="Password">
            
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
           
        </div>
    </div>
    <!-- end password -->
      
    <!-- start password confirmation -->
    <div class="unit">
        <div class="input login-input form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label class="icon-left" for="password">
                <i class="zmdi zmdi-key"></i>
            </label>
            <input class="form-control login-frm-input"  type="password" id="password" name="password_confirmation" placeholder="Password Confirmation">
            
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
           
        </div>
    </div>
    <!-- end password confirmation -->

    <!-- start response from server -->
    <div class="response"></div>
    <!-- end response from server -->

  </div>

  <div class="login-form-footer">
    <button type="submit" class="btn-block btn btn-primary">Reset Password</button>
  </div>

</form>
@stop