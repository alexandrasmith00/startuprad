<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
    

<body class="login-page">
    
    <section class="login-container boxed-login">
      <div class="container">
        <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
          <div class="login-form-container">
            <?php echo $__env->yieldContent('content'); ?>
          </div>
        </div>
      </div>
  </section>

    
    <?php echo $__env->make('includes.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>



    


