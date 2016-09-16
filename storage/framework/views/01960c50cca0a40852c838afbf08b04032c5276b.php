
<div style="padding-top: 30px;" class="details">

  <h4><?php echo e($user->idea->name); ?></h4><br>

  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Role</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php echo e($user->companyRole()); ?></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

