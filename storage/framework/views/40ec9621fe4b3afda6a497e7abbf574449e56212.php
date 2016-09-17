<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">


    <div class="widget-wrap">

      <div style="padding-left: 30px; padding-right: 30px; margin-left: 0px; margin-right: 0px;" class="widget-header block-header margin-bottom-0 clearfix">
        <div class="row">
          <?php echo $__env->make('projects.includes.intro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <div class="user-header-right col-xs-12 col-sm-4">
            <?php echo $__env->make('projects.includes.social', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>
        </div>
      </div>

      <form action="" method="POST" data-parsley-validate>
        <input type="hidden" name="idea" value="<?php echo e(Auth::user()->idea->id); ?>">
        <?php echo $__env->make('projects.edit.edit-component.forms.general', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <hr style="margin-top: 25px; margin-bottom: 25px;">
        <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Update Overview</button>
      </form>

    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>