
<div style="padding-top: 30px;" class="details">

  <h4>Edit Social Information</h4><br>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Facebook'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'Twitter'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('projects.includes.form', ['formTitle' => 'LinkedIn'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
  </div>
</div>
