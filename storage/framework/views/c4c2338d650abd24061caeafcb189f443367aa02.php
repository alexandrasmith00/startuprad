
<div style="padding-top: 30px;" class="details">

  <h4>General Information &nbsp; &nbsp; <i class="fa fa-pencil"></i></h4><br>

  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Name</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php echo e($idea->name); ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Logo</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>
              <?php if( $idea->logo() ): ?>
                <?php echo e($idea->logo()); ?>

              <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No logo <?php endif; ?>
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Tagline</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->tagline()): ?> <?php echo e($idea->tagline()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Tagline <?php endif; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>URL</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->url()): ?> <a href="<?php echo e(linkout($idea->url())); ?>"><?php echo e(linkout($idea->url())); ?></a> <?php else: ?> <strong>No Website</strong> <?php endif; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Location</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->location()): ?> <?php echo e($idea->location()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Location <?php endif; ?></p>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>

