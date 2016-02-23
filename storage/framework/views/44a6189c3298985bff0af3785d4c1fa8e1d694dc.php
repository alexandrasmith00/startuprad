<nav class="navbar navbar-home navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo $__env->make('includes.brand', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                    <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->first); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href=" <?php echo e(url('/account/show').'/'. Auth::user()->id); ?>">Account</a></li>                         
                            <li><a href="<?php echo e(url('/network/caregivers')); ?>"> Add Caregivers</a></li>
                            <li><a href="<?php echo e(url('/network/carerecipients')); ?>"> Add Care Recipients</a></li>
                            <li><a href="<?php echo e(url('/logout')); ?>"> Logout</a></li>
                        
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
            
            
    </div>
</nav>


