<?php $__env->startSection('stylesheets'); ?>
@parent

<link href="/css/app.css" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.general.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>