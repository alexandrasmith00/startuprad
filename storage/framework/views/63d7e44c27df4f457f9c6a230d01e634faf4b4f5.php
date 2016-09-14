<?php $__env->startSection('scripts'); ?>
@parent
<!--Landing-specific scripts go here-->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/scroll.js"></script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.general.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>