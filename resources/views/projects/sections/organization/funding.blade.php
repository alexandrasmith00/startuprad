<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Equity Split</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    @if ($idea->equitySplit()) {{ $idea->equitySplit() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Equity Split @endif</p>
</div>
</div>

<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Outside Investors</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">

    @if ($idea->outsideInvestors()) {{ $idea->outsideInvestors() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Outside Investors @endif</p>


  </div>
</div>

<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Funding Round</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <p>@if ($idea->fundingRound()) {{ $idea->fundingRound() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Funding Round @endif</p>
  </div>
</div>

<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Debt Equity</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <p>@if ($idea->debtEquity()) {{ $idea->debtEquity() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp;  No Debt Equity @endif</p>
  </div>
</div>
