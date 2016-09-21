<div style="padding-top: 30px;" class="details">

  <h4>Invite Team</h4><br>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
      <input id="team_size" type="hidden" name="team_size" value="1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label>Startup Name</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <input data-parsley-required type="text" class="form-control input-one {{{ $errors->first('email') != '' ? 'parsley-error' : ''}}}" name="email" placeholder="Startup Name">
            <span style="padding: 0px; margin: 0px;" class="help-block thin-help-block parsley-show-error">{{ $errors->first('email') }}</span>
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label>Cohorts</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <select name="legal-status-type" class="form-control">
              <option value="none" selected="" disabled="">Select cohort</option>
              @foreach ($cohorts as $cohort)
                <option value="{{ $cohort->id }}">{{$cohort->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>

      <hr style="margin-top: 0px;">
      <div class="members-wrapper">
          <div id="single-team-member">
          <div class="form-line form-labels">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <label>Name</label>
              </div>
              <div class="col-sm-8 col-xs-12">
                <div style="padding-left: 0px;" class="col-xs-5">
                  <input data-parsley-required type="text" class="form-control input-one" name="first" placeholder="First">
                </div>
                <div style="padding-right: 0px;" class="col-xs-7">
                  <input data-parsley-required type="text" class="form-control input-one" name="last" placeholder="Last">
                </div>
              </div>
            </div>
          </div>

          <div class="form-line form-labels">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <label>Email</label>
              </div>
              <div class="col-sm-8 col-xs-12">
                <input data-parsley-required type="email" class="form-control input-one {{{ $errors->first('email') != '' ? 'parsley-error' : ''}}}" name="email" placeholder="Email Address">
                <span style="padding: 0px; margin: 0px;" class="help-block thin-help-block parsley-show-error">{{ $errors->first('email') }}</span>
              </div>
            </div>
          </div>

      </div>
      </div>

      <p style="text-align: center;" class="quick-link"><a id="add-team">Add team member</a></p><br>
    </div>
  </div>
</div>


@section('scripts')
@parent

<script>


  $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".members-wrapper"); //Fields wrapper
    var add_button      = $("#add-team"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
      e.preventDefault();
      if(x < max_fields){ //max input box allowed
        x++; //text box increment

        $("#team_size").val(x);


        var team_member = $("#single-team-member").clone();

        team_member.find("input").each(function(i) {
          $(this).attr('name', $(this).attr('name') + x);
          $(this).val('');
        });

        //customize for next num
        team_member.hide().appendTo(wrapper).fadeIn(1000);
      }
    });

  });


</script>

@stop
