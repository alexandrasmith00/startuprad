
<div style="padding-top: 30px;" class="details">

  <h4>Edit Organization Information</h4><br>



  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

      <?php echo $__env->make('projects.edit.edit-component.forms.organization.legal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <hr style="margin-top: 0px;">
      <?php echo $__env->make('projects.edit.edit-component.forms.organization.funding', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <hr style="margin-top: 0px;">
      <?php echo $__env->make('projects.edit.edit-component.forms.organization.advisors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <hr style="margin-top: 0px;">
      <?php echo $__env->make('projects.edit.edit-component.forms.organization.partnerships', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    </div>
  </div>
</div>
