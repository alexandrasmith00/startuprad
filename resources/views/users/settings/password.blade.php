<div style="padding-top: 30px;" class="details">

  <h4>Change Password</h4><br>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label>Old Password</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <input id="password" data-parsley-type="alphanum" data-parsley-required data-parsley-minlength="6"  type="password" class="form-control input-one {{{ $errors->has('password') ? 'parsley-error' : '' }}}" name="password" placeholder="Old password">
            <span style="padding-top: 0px; margin-bottom: 0px; margin-top: 0px; padding-bottom: 0px;" class="help-block thin-help-block parsley-show-error">{{ $errors->first('password') }}</span>

          </div>
        </div>
      </div>


      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label>New Password</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <input id="new_password" data-parsley-required data-parsley-minlength="6"  type="password" class="form-control input-one" name="new_password" placeholder="New password">
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label>Confirm New Password</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <input data-parsley-required data-parsley-minlength="6" data-parsley-equalto="#new_password"  type="password" class="form-control input-one" name="password_confirmation" placeholder="Confirm new password">
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
