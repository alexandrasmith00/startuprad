<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Advisors</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">

    @if ($idea->advisors() != '[]')
      @foreach ($idea->advisors() as $advisor)
        <p>{{ resourceHelper($advisor, 'Advisor') }}</p>
      @endforeach
    @else
      <p><i class="blue fa fa-exclamation-circle"></i> &nbsp; No Advisors</p>
    @endif

  </div>
</div>
