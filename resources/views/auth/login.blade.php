@extends('layouts.outside')

@section('content')

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">

        <div class="show-form">

            <form id="apply-form" class="form-inline" method="POST" action="/" data-parsley-validate>
                <h3>Sign In</h3>
                <p class="section-description">Log in to the Startup RAD dashboard.</p>

                <div class="form-line form-labels">
                  <div class="row">
                    <div class="col-xs-12">
                      <input data-parsley-required id="login" type="email" class="form-control input-one" name="email" placeholder="Email Address" value="{{ old('email') }}">
                    </div>
                  </div>
                </div>

                <div class="form-line form-labels">
                  <div class="row">
                    <div class="col-xs-12">
                      <input data-parsley-required  type="password" class="form-control input-one" name="password" placeholder="Password">
                    </div>
                  </div>
                </div>

                <div class="form-line form-labels">
                  <div class="row">
                    <div class="col-xs-12">
                        <input type="checkbox" name="logged" value="true" checked=""> Keep me logged in

                    </div>
                  </div>
                </div>




                <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Sign in</button>
            </form>



            <div style="margin-top: 25px; text-align: center;" class="link">
              <a  href="{{ url('/password/reset') }}" class="link">Forgot password?</a>
            </div>
        </div>

      </div>
    </div>
  </div>
</section>




@stop
