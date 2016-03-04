@extends('layouts.full-page')

@section('content')

    <form id="login-form" class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

            <input type="hidden" name="token" value="{{ $token }}">

            <input type="email" name="email" value="{{ $email or old('email') }}"  Placeholder="Email">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    
        </div>
        
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

            <input type="password" name="password" placeholder="Password">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

            <input type="password" name="password_confirmation" placeholder="Password Confirmation">

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif

        </div>
   

        <div class="form-non-input">
            <button type="submit" class="btn">Reset Password</button>
        </div>
            
    </form>

@endsection