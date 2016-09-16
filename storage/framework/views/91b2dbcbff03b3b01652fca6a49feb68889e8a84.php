
<div style="padding-top: 30px;" class="details">

  <h4>Organization</h4><br>

  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">

          <?php echo $__env->make('projects.edit.organization.legal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <hr>
          <?php echo $__env->make('projects.edit.organization.funding', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <hr>
          <?php echo $__env->make('projects.edit.organization.advisors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <hr>
          <?php echo $__env->make('projects.edit.organization.partnerships', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      </div>

    </div>
  </div>
</div>

