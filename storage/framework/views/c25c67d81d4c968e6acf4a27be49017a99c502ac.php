<div class="form-line form-labels">
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <label>Legal Status</label>
    </div>
    <div class="col-sm-8 col-xs-12">
      <div style="padding-left: 0px;" class="col-xs-6">
        <input data-parsley-required type="text" class="form-control input-one" name="first" placeholder="First" value="<?php echo e($idea->legalStatus()); ?>">
      </div>
      <div style="padding-right: 0px;" class="col-xs-6">
        <input data-parsley-required type="text" class="form-control input-one" name="last" placeholder="Last" value="">
      </div>
    </div>
  </div>
</div>
<h1><?php echo e(breakLegalStatus("Massachusetts LLC")['state']); ?></h1>
