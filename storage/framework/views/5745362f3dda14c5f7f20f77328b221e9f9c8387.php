<?php $__env->startSection('content'); ?>

<?php echo $__env->make('pages.landing.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('pages.landing.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<main role="main">
  <?php echo $__env->make('pages.landing.about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--  <?php echo $__env->make('pages.landing.alumni', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>-->
  <?php echo $__env->make('pages.landing.apply', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.landing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>