@extends('layouts.full-page')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    
        </div>

            <div class="form-non-input">
                <button type="submit" class="btn">Send Password Reset Link</button>
            </div>
            
    </form>

@endsection
