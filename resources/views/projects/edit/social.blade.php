
<div style="padding-top: 30px;" class="details">

  <h4>Social Information</h4><br>

  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Facebook</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->facebook()) <a href="{{ linkout($idea->facebook()) }}">{{ linkout($idea->facebook()) }}</a> @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Facebook @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Twitter</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->twitter()) <a href="{{ linkout($idea->twitter()) }}">{{ linkout($idea->twitter()) }}</a> @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Twitter @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>LinkedIn</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->linkedin()) <a href="{{ linkout($idea->linkedin()) }}">{{ linkout($idea->linkedin()) }}</a> @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No LinkedIn @endif</p>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>

