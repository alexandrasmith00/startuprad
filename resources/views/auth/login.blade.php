@extends('layouts.outside')

@section('content')


<section class="section">

  <div class="container">
    <div id="details" class="row">
      <div class="col-md-3">
        <h2 class="section-heading">Login<span class="border"></span></h2>
      </div>
      <div class="col-md-8 col-md-push-1">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">

            <form  id="form-logins"  class="j-forms" role="form" method="POST" action="{{ url('/login') }}" novalidate>

              <div style="text-align: center;">
                <h3 class="brand">Startup Rad</h1>
              </div>

              <div class="login-form-content">

                <div class="unit">
                  <div class="input login-input form-group">
                    <input class="form-control login-frm-input"  type="email" id="login" name="email" value="{{ old('email') }}" placeholder="Email">

                    @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <div class="unit">
                  <div class="input login-input">
                    <label class="icon-left" for="password">
                      <i class="zmdi zmdi-key"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="password" id="password" name="password" placeholder="Password">
                    <span class="hint">
                      <a  href="{{ url('/password/reset') }}" class="link">Forgot password?</a>
                    </span>
                  </div>
                </div>

                <div class="unit">
                  <label class="checkbox">
                    <input type="checkbox" name="logged" value="true" checked="">
                    <i></i>
                    Keep me logged in
                  </label>
                </div>

              </div>

              <div class="login-form-footer">
                <button type="submit" class="btn-block btn">Sign in</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>




@stop
