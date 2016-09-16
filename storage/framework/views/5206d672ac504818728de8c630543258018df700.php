<div style="padding-top: 30px;" class="details">

  <h4>Social Information</h4><br>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">


      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><i class="fa fa-linkedin blue"></i> &nbsp; &nbsp; LinkedIn</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <input type="url" class="form-control input-one" name="linkedin" placeholder="LinkedIn Profile" value="<?php echo e(Auth::user()->social ? Auth::user()->social->linkedin : ''); ?>">
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><i class="fa fa-facebook blue"></i> &nbsp; &nbsp; Facebook</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <input type="url" class="form-control input-one" name="facebook" placeholder="Facebook Profile"  value="<?php echo e(Auth::user()->social ? Auth::user()->social->facebook : ''); ?>">
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><i class="fa fa-twitter blue"></i> &nbsp; &nbsp; Twitter</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <input type="url" class="form-control input-one" name="twitter" placeholder="Twitter Profile"  value="<?php echo e(Auth::user()->social ? Auth::user()->social->twitter : ''); ?>">
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
