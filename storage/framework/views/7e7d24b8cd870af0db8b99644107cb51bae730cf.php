
<div style="padding-top: 30px;" class="details">

  <h4>Edit Overview</h4><br>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Name'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Logo'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Tagline'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Description'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'URL'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Location'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Video'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
  </div>
</div>
