<?php $__env->startSection('content'); ?>

    
<section class="main-container">
  <div class="container">
      
    <?php foreach(Auth::user()->cohorts as $cohort): ?>
      
      <?php echo $__env->make('projects.includes.users-table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
    <?php endforeach; ?>


    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>