<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('layouts.admin.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </head>
  <body>

    <?php echo $__env->make('layouts.general.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <nav id="menu" class="menu slideout-menu">
      <?php echo $__env->make('layouts.admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </nav>

    <main id="main">
      <?php echo $__env->make('layouts.admin.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div id="page-content" style="display: none;" class="page-content-wrapper">

        <div style="padding-top: 25px;" class="container">
          <?php echo $__env->yieldContent('content'); ?>
        </div>
      </div>
    </main>

    <?php echo $__env->make('layouts.general.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script>
      $(window).load(function() {
        $("#page-content").fadeIn("slow");
      });
    </script>

  </body>
</html>


