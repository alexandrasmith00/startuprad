<?php $__env->startSection('scripts'); ?>
@parent
<!--Landing-specific scripts go here-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.general.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>