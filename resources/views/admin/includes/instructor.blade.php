@foreach ($idea->instructor() as $instructor)
<div class="form-line form-labels">
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <label><strong>Instructor</strong></label>
    </div>
    <div class="col-sm-8 col-xs-12">
      <p>
        {{ $instructor->name }}<a href="{{ route('profile', ['id' => $instructor->id ]) }}"> <i class="fa fa-angle-right"></i></a><br>
        <a href="">{{ $instructor->email }}</a>
      </p>
    </div>
  </div>
</div>
@endforeach
