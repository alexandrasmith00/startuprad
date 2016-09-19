@if ($idea->advisors() != '[]')

@foreach ($idea->advisors() as $index => $advisor)
<div class="form-line form-labels">
  <div class="row">
    <div class="col-sm-3 col-xs-12">
      <p><label>Advisors</label>
    </div>
    <div class="col-sm-9 col-xs-12">
      <input type="text" class="form-control input-one" name="advisor" value="{{ resourceHelper($advisor, 'Advisor') }}" placeholder="Advisor">
    </div>
  </div>
</div>
@endforeach

@else

<div class="form-line form-labels">
  <div class="row">
    <div class="col-sm-3 col-xs-12">
      <p><label>Advisors</label>
    </div>
    <div class="col-sm-9 col-xs-12">
      <p> <a href="{{ route('edit-logo') }}"> Add advisor  &nbsp;<i class="fa fa-angle-right blue"></i> </a></p>
    </div>
  </div>
</div>

@endif
