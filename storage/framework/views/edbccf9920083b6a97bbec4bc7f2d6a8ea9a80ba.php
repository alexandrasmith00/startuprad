<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">
    <div class="widget-wrap">

      <?php echo $__env->make('projects.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <form action="" method="POST" data-parsley-validate>
        <input type="hidden" name="idea" value="<?php echo e(Auth::user()->idea->id); ?>">
        <?php echo $__env->make('projects.edit.forms.strategy', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <hr style="margin-top: 25px; margin-bottom: 25px;">
        <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Update Strategy</button>
      </form>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>