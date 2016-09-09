<script src="<?php echo e(asset('js/lib/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/lib/bootstrap.js')); ?>"></script>
<!--<script src="<?php echo e(asset('/js/bootstrap-table.min.js')); ?>"></script>-->
<script src="<?php echo e(asset('/js/slideout.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/parsley.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/lib/autosize.min.js')); ?>"></script>

<?php echo $__env->make('js.comments', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('scripts'); ?>
