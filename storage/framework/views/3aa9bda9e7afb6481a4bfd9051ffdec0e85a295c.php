<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">
    <div class="widget-wrap">

      <?php echo $__env->make('projects.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


      <div style="padding-top: 30px;" class="details">
        <h4>Team Information</h4><br>

        <div class="row">
          <div class="col-xs-12  col-sm-10 col-sm-offset-1">
              <?php echo $__env->make('admin.includes.instructor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              <?php echo $__env->make('admin.includes.tfs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>
        </div>
        <hr>

        <form action="" method="POST" data-parsley-validate>
          <?php echo $__env->make('admin.includes.invite-tf', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <button id="apply-button" class="btn oversized-btn btn-blue" type="submit">Add Teaching Fellow</button>
        </form>

      </div>

    </div>



  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>