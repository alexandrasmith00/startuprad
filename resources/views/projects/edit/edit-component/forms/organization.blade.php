
<div style="padding-top: 30px;" class="details">

  <h4>Edit Organization Information</h4><br>



  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

      @include('projects.edit.edit-component.forms.organization.legal')








      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label><i class="fa fa-twitter blue"></i></label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <input type="url" class="form-control input-one" name="twitter" value="{{ $idea->twitter() }}" placeholder="Twitter Profile Link">
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label><i class="fa fa-linkedin blue"></i></label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <input type="text" class="form-control input-one" name="linkedIn" value="{{ $idea->linkedIn() }}" placeholder="LinkedIn Profile Link">
          </div>
        </div>
      </div>

    </div>
  </div>
</div>