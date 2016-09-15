<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('includes.posts.make', ["placeholder" => "Ask a question or share something interesting...", 'button' => 'Get feedback now', 'isYours' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('includes.posts.all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>