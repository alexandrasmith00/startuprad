<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('layouts.landing.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </head>
  <body>

    <?php echo $__env->make('layouts.general.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.landing.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </body>
</html>
