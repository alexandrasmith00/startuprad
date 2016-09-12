<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('layouts.outside.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
  <body>
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <div class="show-form">
              <?php echo $__env->yieldContent('content'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php echo $__env->make('layouts.general.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>


