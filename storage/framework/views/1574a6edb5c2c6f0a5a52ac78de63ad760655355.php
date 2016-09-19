
<div style="padding-top: 30px;" class="details">

  <?php if($edit): ?>
    <h4><a class="edit-section" href="<?php echo e(route('edit-general')); ?>">Edit Overview &nbsp; <i class="fa fa-angle-right"></i></a></h4><br>
  <?php else: ?>
    <h4>Overview</h4><br>
  <?php endif; ?>

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
            <label><strong>Description</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->description()): ?> <?php echo e($idea->description()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Description <?php endif; ?></p>
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

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Video</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>
              <?php if($idea->video()): ?>
              <a href="<?php echo e(linkout($idea->video())); ?>"><?php echo e(linkout($idea->video())); ?></a>
              <?php else: ?>
              <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Video
              <?php endif; ?>
            </p>
          </div>
        </div>


      </div>



    </div>
  </div>
</div>

