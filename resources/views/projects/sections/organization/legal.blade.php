<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Legal Status</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <p>@if ($idea->legalStatus()) {{ $idea->legalStatus() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Legal Status @endif</p>
  </div>
</div>

<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Lawyers</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <p>
      @if ($idea->lawyers() != '[]')
      @foreach ($idea->lawyers() as $lawyer)
    <p>{{ resourceHelper($lawyer, 'Name') }} @ {{ resourceHelper($lawyer, 'Firm') }} </p>
    @endforeach
    @else
    <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Partnerships
    @endif
    </p>
</div>
</div>

