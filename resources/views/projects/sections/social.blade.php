
<div style="padding-top: 30px;" class="details">

  @if ($edit)
    <h4><a class="edit-section" href="{{ route('edit-social') }}">Edit Social Media &nbsp; <i class="fa fa-angle-right"></i></a></h4><br>
  @else
    <h4>Social Media</h4><br>
  @endif

  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><i class="fa fa-facebook blue"></i> &nbsp; <strong>Facebook</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->facebook()) <a href="{{ linkout($idea->facebook()) }}">{{ linkout($idea->facebook()) }}</a> @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Facebook @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><i class="fa fa-twitter blue"></i> &nbsp; <strong>Twitter</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->twitter()) <a href="{{ linkout($idea->twitter()) }}">{{ linkout($idea->twitter()) }}</a> @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Twitter @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><i class="fa fa-linkedin blue"></i> &nbsp; <strong>LinkedIn</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->linkedin()) <a href="{{ linkout($idea->linkedin()) }}">{{ linkout($idea->linkedin()) }}</a> @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No LinkedIn @endif</p>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>

