<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-12">
    <div class="widget-wrap">

      <?php echo $__env->make('projects.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <?php echo $__env->make('projects.sections.general', ['edit' => false ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <hr style="margin-top: 25px; margin-bottom: 25px;">

      <?php echo $__env->make('projects.sections.social', ['edit' => false ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <hr style="margin-top: 25px; margin-bottom: 25px;">

      <?php echo $__env->make('projects.sections.team', ['edit' => false ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <hr style="margin-top: 25px; margin-bottom: 25px;">

      <?php echo $__env->make('projects.sections.organization', ['edit' => false ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <hr style="margin-top: 25px; margin-bottom: 25px;">

      <?php echo $__env->make('projects.sections.value', ['edit' => false ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <hr style="margin-top: 25px; margin-bottom: 25px;">

      <?php echo $__env->make('projects.sections.strategy', ['edit' => false ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>