@extends('layouts.full-page')

@section('content')

        <form  id="login-form" role="form" method="POST" action="{{ url('/login') }}">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">

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
            
            <div class="form-non-input">
                <button type="submit" class="btn">Login</button>
            </div>
            
            <div class="form-non-input">
                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
            
		</form>

@endsection
