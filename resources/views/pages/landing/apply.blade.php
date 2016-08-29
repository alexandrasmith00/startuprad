<section id="apply-today" class="section section-gray">
  <div class="container">

    <div class="row">

      <div class="col-md-3">
        <h2 class="section-heading">Apply<span class="border"></span></h2>
        <p style="padding-bottom: 25px;">Apply to the Fall 2016 Startup Rad course. Please apply together as a team only once.</p>
      </div>

      <div class="col-md-8 col-md-push-1">

        <form id="apply-form" class="form-inline" method="POST" action="/" data-parsley-validate enctype="multipart/form-data">

            <div class="application-section">
              <h3>Team Members</h3>
              <p class="section-description">Fill out information for each team member applying to the course.</p>

              <input id="team_size" type="hidden" name="team_size" value="1">

              <div class="members-wrapper">
                  @include('pages.landing.apply.team-member')
              </div>

              <div class="text-center"><a id="add-team">Add another team member <i class="fa fa-angle-right"></i></a></div>

            </div>

            <div class="application-section">

              <h3>Startup Information</h3>
              <p class="section-description">Fill out the information for your company or idea.</p>


              <div class="form-line form-labels">
                <div class="row">
                  <div class="col-sm-2 col-xs-12">
                    <label>Startup Name</label>
                  </div>
                  <div class="col-sm-10 col-xs-12">
                    <input data-parsley-required  type="text" class="form-control input-one" name="name" placeholder="Startup Name">
                  </div>
                </div>
              </div>

              <div class="form-line form-labels">
                <div class="row">
                  <div class="col-sm-2 col-xs-12">
                    <label>URL, if any</label>
                  </div>
                  <div class="col-sm-10 col-xs-12">
                    <input type="url" class="form-control input-one" name="url" placeholder="Startup URL">
                  </div>
                </div>
              </div>

              <div class="form-line form-labels">
                <p><i class="fa fa-angle-right blue"></i> &nbsp; Please briefly describe your startup, including how it originated, the work you have done to date, the roles of the team members and the work you are hoping to accomplish in the RAD</i></p>
                <div class="row">
                  <div class="col-sm-2 col-xs-12">
                    <label>Description</label>
                  </div>
                  <div class="col-sm-10 col-xs-12">
                    <textarea data-parsley-required  rows="10" class="form-control input-one" name="description" placeholder="Description of your startup"></textarea>
                  </div>
                </div>
              </div>



              <div class="form-line form-labels">
                <p><i class="fa fa-angle-right blue"></i> &nbsp; Please provide a link to a video (5 minutes max) introducting yourself, your teammates, and your startup.  <i>(Nothing fancy is required, just you in front of your computer or phone is fine)</i></p>
                <div class="row">
                  <div class="col-sm-2 col-xs-12">
                    <label>Video Link</label>
                  </div>
                  <div class="col-sm-10 col-xs-12">
                    <input data-parsley-required  type="url" class="form-control input-one" name="video" placeholder="Video link">
                  </div>
                </div>
              </div>
            </div>

            <div class="application-section">
              <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Apply</button>
            </div>

        </form>
      </div>

    </div>

  </div>
</section>

@section('scripts')
@parent
<!-- The application scripts -->

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

        team_member.find("#mem_num").html("Team Member #" + x);

        team_member.find('#set-label').attr('for', ( 'resume' + x ));
        team_member.find('#set-label').attr('id', ( 'set-label' + x ));

        team_member.find('#set-label' + x).html('<i class="blue fa fa-cloud-upload"></i> Upload Your Resume (in PDF format)');

        team_member.find("input").each(function(i) {
          if ($(this).attr('name') == 'resume') {
            $(this).attr('id', $(this).attr('name') + x);
          }
          $(this).attr('name', $(this).attr('name') + x);
          $(this).val('');
        });

        team_member.find("select").each(function(i) {
          $(this).attr('name', $(this).attr('name') + x);
          $(this).addClass('not-selected');
          $(this).removeClass('blue-selected');
          $(this).val('');
        });

        //customize for next num
        team_member.hide().appendTo(wrapper).fadeIn(1000);
      }
    });


    $( "#apply-form" ).submit(function( event ) {
      $( "#apply-button" ).html("<i class='fa fa-spinner fa-spin fa-fw'></i>");
      $( "#apply-button" ).attr("disabled", "disabled");
    });

  });



</script>

@stop
