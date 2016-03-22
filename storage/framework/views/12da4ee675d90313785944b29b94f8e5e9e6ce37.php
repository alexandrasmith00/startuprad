<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
    

<body class="overlay-leftbar">
    <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>
    
    <?php echo $__env->make('includes.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>


