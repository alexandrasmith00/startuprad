
<div style="padding-top: 30px;" class="details">

  <h4>Team Members</h4><br>

  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      @foreach ($idea->team() as $member)
      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Name</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>{{ $member }}</p>
          </div>
        </div>
      </div>
      @endforeach




    </div>
  </div>
</div>

