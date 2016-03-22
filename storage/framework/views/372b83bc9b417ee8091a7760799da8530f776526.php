<div class="topbar-right pull-right">
    <div class="clearfix">
        <!--Mobile View Leftbar Toggle-->
        <ul class="left-bar-switch pull-left">
            <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span></li>
        </ul>
        <ul class="pull-right top-right-icons">
            
            <li><a href="#" class="btn-top-search"><i class="zmdi zmdi-search"></i></a></li>
            <?php echo $__env->make('includes.header.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('includes.header.notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <li><a href="#" class="right-toggle-switch"><i class="zmdi zmdi-format-align-left"></i><span class="more-noty"></span></a></li>
        </ul>
    </div>
</div>