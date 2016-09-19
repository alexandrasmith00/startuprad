
<div style="padding-top: 30px;" class="details">

  <h4>Student Information</h4><br>

  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label>Year</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <select id="class-year" data-parsley-required  class="form-control input-one" name="year" placeholder="Class year">
              <option value="" selected disabled>Select class year</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
            </select>
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label>Concentration</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <select id="concentration" data-parsley-required class="form-control input-one" name="concentration" >
              <option value="" selected disabled>Select a concentration</option>
              <option value="Undecided">Undecided</option>

              @foreach ($concentrations as $concentration)
                <option value="{{ $concentration }}">{{ $concentration }}</option>
              @endforeach

            </select>
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label>Secondary</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <select id="secondary" data-parsley-required class="form-control input-one" name="secondary" placeholder="Class year">
              <option value="" selected disabled>Select a secondary</option>
              <option value="No secondary">No secondary</option>
              @foreach ($concentrations as $secondary)
              <option value="{{ $secondary }}">{{ $secondary }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


@section('scripts')
@parent
<script>

  $(document).ready(function() {

    $("#class-year").val('{{ $user->student->year }}');
    $("#concentration").val('{{ $user->student->concentration }}');
    $("#secondary").val('{{ $user->student->secondary }}');

  });



</script>

@stop
