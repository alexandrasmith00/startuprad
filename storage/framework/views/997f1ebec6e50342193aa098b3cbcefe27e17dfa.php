<?php $__env->startSection('content'); ?>

<div class="page-header filled light">
    <div class="row">
        <div class="col-md-7 col-sm-7">
        </div>
        <div class="col-md-5 col-sm-5">
            <?php echo $__env->make('includes.posts.tags', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</div>

<div class="row">

  <div class="col-md-8">
        <?php echo $__env->make('includes.posts.all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>

  <div class="col-md-4">
      <?php echo $__env->make('includes.deliverables.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('includes.activity.all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="js/lib/additional-methods.js"></script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>