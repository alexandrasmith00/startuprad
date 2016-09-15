<div class="modal fade" id="feedback-modal" tabindex="-1" role="dialog" aria-labelledby="feedback-modal">
  <div style="margin-top: 10%; background-color: white;" class="holder col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
    <button style="margin-top: 10px;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <br>

    <form action="<?php echo e(route('bug.create')); ?>" method="post" data-parsley-validate>
      <h3>Provide us with feedback</h3>
      <p class="section-description">Create your password for Startup RAD.</p>

      <div class="form-line form-labels">

        <p style="margin-top: 25px;" ><i class="fa fa-angle-right blue"></i> &nbsp; Please provide any feedback you have on the platform including - but not limited to - bug reports, feature requests, etc.</i></p>
        <div class="row">
          <div class="col-xs-12">

            <textarea data-parsley-required spellcheck="false" style=" resize: none; overflow: hidden; word-wrap: break-word; height: 52px;" name="feedback" class="form-control regular-textarea-block" placeholder="Enter your feedback here"></textarea>
          </div>
        </div>

        <p style="margin-top: 25px;" ><i class="fa fa-angle-right blue"></i> &nbsp; Rate the importance of this, with a 2 being urgent and a 0 being it would be nice, but not required.</p>
        <div class="row">
          <div class="col-xs-12">
            <select data-parsley-required class="form-control input-one not-selected" name="importance" placeholder="Importance">
              <option value="" selected disabled>How important?</option>
              <option value="2">2</option>
              <option value="1">1</option>
              <option value="0">0</option>
            </select>
          </div>
        </div>

    </form>




      <button style="margin-top: 50px;" class="btn oversized-btn btn-blue" type="submit">Submit</button>

      <hr style="margin-top: 25px;">

      <p class="quick-link">Just so you know, I really appreciate your feedback! RAD is still a work in progress but thank you for hanging in there with me.</a></p>

    </div>
  </div>
</div>



