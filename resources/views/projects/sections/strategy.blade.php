
<div style="padding-top: 30px;" class="details">

  @if ($edit)
    <h4><a class="edit-section" href="{{ route('edit-strategy') }}">Edit Strategy &nbsp; <i class="fa fa-angle-right"></i></a></h4><br>
  @else
    <h4>Strategy</h4><br>
  @endif


  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Market</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->market()) {{ $idea->market() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Defined Market @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Competition</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->competition()) {{ $idea->competition() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Competitive Landscape @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Marketing</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->marketing()) {{ $idea->marketing() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Marketing @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Business Model</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->businessModel()) {{ $idea->businessModel() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Business Model @endif</p>
          </div>
        </div>

      </div>



    </div>
  </div>
</div>

