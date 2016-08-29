<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('layouts.pdf.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </head>
  <body>

    <?php echo $__env->yieldContent('content'); ?>

  </body>
</html>
