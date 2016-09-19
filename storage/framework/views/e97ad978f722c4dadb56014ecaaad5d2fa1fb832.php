
<div style="padding-top: 30px;" class="details">

  <h4>Edit Strategy</h4><br>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Market'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Competition'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Marketing'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Business Model'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
  </div>
</div>
