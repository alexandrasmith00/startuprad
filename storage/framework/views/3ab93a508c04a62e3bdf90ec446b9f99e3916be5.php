<aside class="leftbar material-leftbar">
    <div class="left-aside-container">
        <div class="user-profile-container">
            <?php echo $__env->make('includes.sidebar.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('includes.sidebar.admin-links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        
        <?php echo $__env->make('includes.sidebar.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</aside>