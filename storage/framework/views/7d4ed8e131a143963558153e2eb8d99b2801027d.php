<div class="active tab-pane" id="activity">
    <?php echo $__env->make('includes.posts.make', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('includes.posts.all', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>