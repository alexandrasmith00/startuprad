<script src="<?php echo e(asset('js/lib/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/lib/bootstrap.js')); ?>"></script>
<!--<script src="<?php echo e(asset('/js/bootstrap-table.min.js')); ?>"></script>-->
<script src="<?php echo e(asset('/js/slideout.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/parsley.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/lib/autosize.min.js')); ?>"></script>

<!--Needed for tags for some reason-->
<script src="<?php echo e(asset('js/lib/jRespond.js')); ?>"></script>
<script src="<?php echo e(asset('js/lib/hammerjs.js')); ?>"></script>
<script src="<?php echo e(asset('js/lib/jquery.hammer.js')); ?>"></script>
<script src="<?php echo e(asset('js/lib/jquery.slimscroll.js')); ?>"></script>
<script src="<?php echo e(asset('js/lib/smart-resize.js')); ?>"></script>


<!--Forms-->
<script src="<?php echo e(asset('js/apps.js')); ?>"></script>


<?php echo $__env->make('js.comments', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('scripts'); ?>
