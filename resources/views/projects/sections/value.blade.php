
<div style="padding-top: 30px;" class="details">

  @if ($edit)
    <h4><a class="edit-section" href="{{ route('edit-value') }}">Edit Value Chain &nbsp; <i class="fa fa-angle-right"></i></a></h4><br>
  @else
    <h4>Value Chain</h4><br>
  @endif


  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Customer</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->customer()) {{ $idea->customer() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Customer Description @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Demands</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->demands()) {{ $idea->demands() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Customer Need @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Product</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->product()) {{ $idea->product() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Product @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Value</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->value()) {{ $idea->value() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Value Proposition @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Use Case</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->useCase()) {{ $idea->useCase() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Use Case @endif</p>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>

