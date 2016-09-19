<div class="form-line form-labels">
  <div class="row">
    <div class="col-sm-3 col-xs-12">
      <label>Legal Status</label>
    </div>
    <div class="col-sm-9 col-xs-12">
      <div style="padding-left: 0px;" class="col-xs-6">
        <select name="legal-status-state" class="form-control">
          <option value="none" selected="" disabled="">Select state</option>
          <option value="Alabama">Alabama</option>
          <option value="Alaska">Alaska</option>
          <option value="Arizona">Arizona</option>
          <option value="Arkansas">Arkansas</option>
          <option value="California">California</option>
          <option value="Colorado">Colorado</option>
          <option value="Connecticut">Connecticut</option>
          <option value="Delaware">Delaware</option>
          <option value="DC">District of Columbia</option>
          <option value="Florida">Florida</option>
          <option value="Georgia">Georgia</option>
          <option value="Hawaii">Hawaii</option>
          <option value="Idaho">Idaho</option>
          <option value="Illinois">Illinois</option>
          <option value="Indiana">Indiana</option>
          <option value="Iowa">Iowa</option>
          <option value="Kansas">Kansas</option>
          <option value="Kentucky">Kentucky</option>
          <option value="Louisiana">Louisiana</option>
          <option value="Maine">Maine</option>
          <option value="Maryland">Maryland</option>
          <option value="Massachusetts">Massachusetts</option>
          <option value="Michigan">Michigan</option>
          <option value="Minnesota">Minnesota</option>
          <option value="Mississippi">Mississippi</option>
          <option value="Missouri">Missouri</option>
          <option value="Montana">Montana</option>
          <option value="Nebraska">Nebraska</option>
          <option value="Nevada">Nevada</option>
          <option value="New Hampshire">New Hampshire</option>
          <option value="New Jersey">New Jersey</option>
          <option value="New Mexico">New Mexico</option>
          <option value="New York">New York</option>
          <option value="North Carolina">North Carolina</option>
          <option value="North Dakota">North Dakota</option>
          <option value="Ohio">Ohio</option>
          <option value="Oklahoma">Oklahoma</option>
          <option value="Oregon">Oregon</option>
          <option value="Pennsylvania">Pennsylvania</option>
          <option value="Rhode Island">Rhode Island</option>
          <option value="South Carolina">South Carolina</option>
          <option value="South Dakota">South Dakota</option>
          <option value="Tennessee">Tennessee</option>
          <option value="Texas">Texas</option>
          <option value="Utah">Utah</option>
          <option value="Vermont">Vermont</option>
          <option value="Virginia">Virginia</option>
          <option value="Washington">Washington</option>
          <option value="West Virginia">West Virginia</option>
          <option value="Wisconsin">Wisconsin</option>
          <option value="Wyoming">Wyoming</option>
        </select>
      </div>
      <div style="padding-right: 0px;" class="col-xs-6">
        <select name="legal-status-type" class="form-control">
          <option value="none" selected="" disabled="">Select type</option>
          <option value="LLC">LLC</option>
          <option value="C Corp">C Corp</option>
          <option value="S Corp">S Corp</option>
          <option value="Nonprofit">Nonprofit</option>
        </select>
      </div>
    </div>
  </div>
</div>


<div class="form-line form-labels">
  <div class="row">
    <div class="col-sm-3 col-xs-12">
      <label>Lawyers</label>
    </div>
    <div class="col-sm-9 col-xs-12">
      <p> <a href="{{ route('edit-logo') }}"> Add lawyer  &nbsp;<i class="fa fa-angle-right blue"></i> </a></p>
    </div>
  </div>
</div>


@section('scripts')
@parent

  <script>
    if ( "{{ $idea->legalStatus() != '' }}") {
      $('select[name="legal-status-state"] option[value="{{breakLegalStatus($idea->legalStatus())["state"] }}"]').attr("selected",true);
      $('select[name="legal-status-type"] option[value="{{breakLegalStatus($idea->legalStatus())["type"] }}"]').attr("selected",true);
    }
  </script>


@stop
