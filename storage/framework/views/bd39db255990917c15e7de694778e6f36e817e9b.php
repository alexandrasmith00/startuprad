<header class="topbar clearfix">

    <?php echo $__env->make('includes.header.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('includes.header.brand', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('includes.header.links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</header>