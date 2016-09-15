@extends('layouts.outside')

@section('content')

<form role="form" class="form-inline" method="POST"  action="{{ route('student-step-two') }}" data-parsley-validate>

  <h3>Tell us more about {{  Auth::user()->team()->idea->name  }}</h3>
  <p class="section-description"></p>

  <div class="form-line form-labels">
    <div class="row">
      <div style="margin-top: 25px; margin-bottom: 25px;" class="col-xs-12">
        <p>What is your role at {{ Auth::user()->team()->idea->name }}?</p>
        <input data-parsley-required id="email" type="role" name="role"  class="form-control input-one" placeholder="Company Role">
      </div>
    </div>
  </div>

  <button class="btn oversized-btn btn-blue" type="submit">Continue</button>

</form>

@stop


