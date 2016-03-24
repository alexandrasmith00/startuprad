<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>

    <body class="overlay-leftbar">
        <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <section class="main-container">
          <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
          </div>
        </section>

        <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('includes.sidebar-right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('includes.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
