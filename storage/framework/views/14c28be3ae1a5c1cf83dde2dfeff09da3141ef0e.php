<?php $__env->startSection('stylesheets'); ?>
@parent

<link href="/css/admin.css" rel="stylesheet">
<!--<link href="/css/landing.css" rel="stylesheet">-->
<link href="/css/app.css" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.general.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>