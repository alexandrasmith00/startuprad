<div style="padding-top: 30px;" class="details">

  <h4>Invite TF</h4><br>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label>Name</label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <div style="padding-left: 0px;" class="col-xs-5">
              <input data-parsley-required type="text" class="form-control input-one" name="first" placeholder="First">
            </div>
            <div style="padding-right: 0px;" class="col-xs-7">
              <input data-parsley-required type="text" class="form-control input-one" name="last" placeholder="Last">
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
            <input data-parsley-required type="email" class="form-control input-one {{{ $errors->first('email') != '' ? 'parsley-error' : ''}}}" name="email" placeholder="Email Address">
            <span style="padding-top: 0px;" class="help-block thin-help-block parsley-show-error">{{ $errors->first('email') }}</span>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
