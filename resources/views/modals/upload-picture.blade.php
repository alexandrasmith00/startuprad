<div class="modal fade" id="crop-picture" tabindex="-1" role="dialog" aria-labelledby="crop-picture">
  <div style="margin-top: 10%; background-color: white;" class="holder col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
    <button style="margin-top: 10px;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <br>

    <h4 style="margin-bottom: 50px;" class="blue">Crop your profile picture</h4>


    <div style="text-align: center; " id="loading-pic"><i class="fa fa-2x fa-spin fa-spinner blue"></i></div>
    <div style="display: none; max-height: 400px;" id="picture-frame"><img style="max-width: 100%;" id="upload-image"></div>



    <form id="cropped-image" action method="post">
      <input type="hidden" id="x" name="x" />
      <input type="hidden" id="x" name="x" />
      <input type="hidden" id="y" name="y" />
      <input type="hidden" id="w" name="w" />
      <input type="hidden" id="h" name="h" />
      <button id="crop-button" style="display: none; margin-top: 25px;" class="btn oversized-btn btn-blue">Looks good!</button>
    </form>






    <hr style="margin-top: 25px;">



    <p class="quick-link" style="margin-bottom: 25px;">  Don't want this picture? <a data-dismiss="modal">Go back <i class="fa fa-angle-right"></i></a></p>

  </div>
</div>


@section('scripts')
@parent
<script>

  $('body').on('click', '#crop-button', function(e) {
        e.preventDefault();

        var formData = new FormData($('form#cropped-image')[0]);
        formData.append('image', $('#upload-image').attr('src'));

        $.ajax({
          method: "POST",
          url:"{{ route('crop-profile-pic') }}",
          data: formData,
          processData: false,
          contentType: false,
          success: function (data) {
            console.log(data);
          },
          error: function () {
            console.log('Upload error');
          }
        });

        return false;
  });


</script>


@stop

