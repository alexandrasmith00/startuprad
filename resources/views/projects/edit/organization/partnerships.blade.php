<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Partnerships</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <p>
      @if ($idea->partnerships())
        @foreach ($idea->partnerships() as $partnership)
          @foreach($partnership as $cool)
          <p> {{ $cool }}</p><br>
          @endforeach
        @endforeach
      @else
        <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Partnerships
      @endif
    </p>
  </div>
</div>
