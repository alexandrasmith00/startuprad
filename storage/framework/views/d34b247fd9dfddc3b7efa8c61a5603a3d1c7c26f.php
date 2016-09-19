
<div style="padding-top: 30px;" class="details">

  <h4>Edit Value Chain</h4><br>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Customer'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Demands'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Product'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Value'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Use Case'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
  </div>
</div>
