@extends('layouts.outside')

@section('content')

<form id="propic" role="form" class="form-inline" method="POST" action="{{ route('student-step-one') }}" enctype="multipart/form-data" data-parsley-validate>

  <h3>Upload a profile picture</h3>
  <p class="section-description">This is how your RAD will get to know your face.</p>

  <div class="form-line form-labels">
    <div class="row">
      <div  class="col-xs-12">
        <div id="upload-box">
            <label id="set-label" for="profile-picture" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"class="custom-file-upload form-control input-one not-selected">
              <i class="blue fa fa-cloud-upload"></i> &nbsp;Upload Your Picture
            </label>
            <input onchange="check_file(this)" data-parsley-required accept="image/png, image/jpeg" id="profile-picture" name="profile-picture" type="file"/>
        </div>
        <img style="display: none; width: 100%;" id="final-cropped" src="">
        <input id="cropped-profile-picture" type="hidden" name="cropped-profile-picture" value="">

      </div>
    </div>
  </div>


  <button disabled id="final-submit" class="btn oversized-btn btn-blue" type="submit">Continue</button>

  <div id="restart" style="display: none;">
    <hr style="margin-top: 25px;">
    <p class="quick-link">  Don't want this picture? <a href=".">Restart <i class="fa fa-angle-right"></i></a></p>
  </div>
</form>

@stop


@section('scripts')
@parent
<script>

  function check_file(changed) {
    var path = $(changed).val();
    var filename = path.replace(/^.*\\/, "");
    var label = $('label[for="' + changed.id + '"]');

    $(label).html('<span class="blue"><i class="blue fa fa-cloud-upload"></i> Uploaded: ' + filename + '</span>');

    $.ajax({
      type     : "POST",
      url      : "{{ route('upload-profile-pic') }}",
      data     : new FormData($('form#propic')[0]),
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
        $("#upload-image").one("load", function() {

          $("#loading-pic").fadeOut(function(){
            $("#picture-frame").fadeIn();
            $("#crop-button").fadeIn();

              $('#upload-image').cropper({
                autoCrop: true,
                aspectRatio: 9 / 9,
                crop: function(e) {
                  // Update form values
                  $("#x").val(e.x);
                  $("#y").val(e.y);
                  $("#w").val(e.width);
                  $("#h").val(e.height);

                }
              });


          });
        }).attr("src", data);

      }
    });

    $("#crop-picture").modal('show');
  }




</script>
@stop
