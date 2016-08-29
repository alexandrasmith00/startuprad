<div id="single-team-member">

    <div class="team-member">
      <b id="mem_num">Team Member #1</b>
    </div>

    <div class="form-line form-labels">
      <div class="row">
        <div class="col-sm-2 col-xs-12">
          <label>Name</label>
        </div>
        <div class="col-sm-10 col-xs-12">
          <div style="padding-left: 0px;" class="col-xs-6">
            <input data-parsley-required type="text" class="form-control input-one" name="first" placeholder="First">
          </div>
          <div style="padding-right: 0px;" class="col-xs-6">
            <input data-parsley-required type="text" class="form-control input-one" name="last" placeholder="Last">
          </div>
        </div>
      </div>
    </div>

    <div class="form-line form-labels">
      <div class="row">
        <div class="col-sm-2 col-xs-12">
          <label>Email</label>
        </div>
        <div class="col-sm-10 col-xs-12">
          <input data-parsley-required type="email" class="form-control input-one" name="email" placeholder="Email Address">
        </div>
      </div>
    </div>


    <div class="form-line form-labels">
      <div class="row">
        <div class="col-sm-2 col-xs-12">
          <label>Year</label>
        </div>
        <div class="col-sm-10 col-xs-12">
          <select data-parsley-required onchange="check_selected()"  class="form-control input-one not-selected" name="year" placeholder="Class year">
            <option value="" selected disabled>Select class year</option>
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
        <div class="col-sm-2 col-xs-12">
          <label>Concentration</label>
        </div>
        <div class="col-sm-10 col-xs-12">
          <select data-parsley-required onchange="check_selected()"  class="form-control input-one not-selected" name="concentration" >
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
        <div class="col-sm-2 col-xs-12">
          <label>Secondary</label>
        </div>
        <div class="col-sm-10 col-xs-12">
          <select onchange="check_selected()" data-parsley-required class="form-control input-one not-selected" name="secondary" placeholder="Class year">
            <option value="" selected disabled>Select a secondary</option>
            <option value="No secondary">No secondary</option>
            @foreach ($concentrations as $secondary)
              <option value="{{ $secondary }}">{{ $secondary }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div class="form-line form-labels">
      <div class="row">
        <div class="col-sm-2 col-xs-12">
          <label>Resume</label>
        </div>
        <div class="col-sm-10 col-xs-12">
          <label id="set-label" for="resume" class="custom-file-upload form-control input-one not-selected">
            <i class="blue fa fa-cloud-upload"></i> Upload Your Resume (in PDF format)
          </label>
          <input onchange="check_file()" data-parsley-required accept="application/pdf" id="resume" name="resume" type="file"/>
        </div>
      </div>
    </div>

</div>

@section('scripts')
@parent


<script>

  $( document ).ready(function() {
    check_selected();
  });

  function check_selected() {

    $('#single-team-member select').each(function() {
      if ($(this).val() == null) {
        $(this).removeClass("blue-selected");
      } else {
         $(this).removeClass("not-selected");
//         $(this).addClass("blue-selected");
      }
    });
  }

  function check_file() {
    $('input[name="resume"]').each(function() {
      var path = $(this).val();
      var filename = path.replace(/^.*\\/, "");

      var label = $("label[for='"+$(this).attr('id')+"']");
      $(label).html('<span class="blue"><i class="blue fa fa-cloud-upload"></i> Uploaded: ' + filename + '</span>');
    });

  }

</script>


@stop
