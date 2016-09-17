
<div style="padding-top: 30px;" class="details">

  <h4>Social Information</h4><br>

  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><i class="fa fa-facebook blue"></i> &nbsp; <strong>Facebook</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->facebook()): ?> <a href="<?php echo e(linkout($idea->facebook())); ?>"><?php echo e(linkout($idea->facebook())); ?></a> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Facebook <?php endif; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><i class="fa fa-twitter blue"></i> &nbsp; <strong>Twitter</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->twitter()): ?> <a href="<?php echo e(linkout($idea->twitter())); ?>"><?php echo e(linkout($idea->twitter())); ?></a> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Twitter <?php endif; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><i class="fa fa-linkedin blue"></i> &nbsp; <strong>LinkedIn</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->linkedin()): ?> <a href="<?php echo e(linkout($idea->linkedin())); ?>"><?php echo e(linkout($idea->linkedin())); ?></a> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No LinkedIn <?php endif; ?></p>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>

