<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body>
    
    <div id="sidebar-container" class="sidebar-container">

        <?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			
        <div class="sidebar-pusher">

            <div class="all-content">
                <div class="push-content-down">

                    <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    
                    <div class="page-content">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>

                    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                </div>
            </div>
            
        </div>
        
    </div>
        
    <?php echo $__env->make('includes.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>



    