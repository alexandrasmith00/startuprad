
<div style="padding-top: 30px;" class="details">

  <h4>Startup Information</h4><br>

  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Year</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>Class of {{ $user->student->year }}</p>
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Concentration</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>{{ $user->student->concentration }}</p>
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Secondary</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>{{ $user->student->secondary }}</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

