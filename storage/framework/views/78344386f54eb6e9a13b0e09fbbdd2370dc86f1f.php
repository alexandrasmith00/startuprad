<div style="padding-top: 30px;" class="details">

  <h4>Account Information</h4><br>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label>Name</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <div style="padding-left: 0px;" class="col-xs-6">
              <input data-parsley-required type="text" class="form-control input-one" name="first" placeholder="First" value="<?php echo e($user->first); ?>">
            </div>
            <div style="padding-right: 0px;" class="col-xs-6">
              <input data-parsley-required type="text" class="form-control input-one" name="last" placeholder="Last" value="<?php echo e($user->last); ?>">
            </div>
          </div>
        </div>
      </div>


      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label>Email</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <input data-parsley-required type="email" class="form-control input-one <?php echo e($errors->first('email') != '' ? 'parsley-error' : ''); ?>" name="email" value="<?php echo e(old('email') ? old('email') : $user->email); ?>" placeholder="Email Address">
            <span style="padding-top: 0px;" class="help-block thin-help-block parsley-show-error"><?php echo e($errors->first('email')); ?></span>


          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label>Password</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p> <a href="<?php echo e(route('change-password')); ?>"> Change password  &nbsp;<i class="fa fa-angle-right blue"></i> </a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
