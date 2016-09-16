
<div style="padding-top: 30px;" class="details">

  <h4>Edit General Information</h4><br>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>Name</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <input data-parsley-required type="text" class="form-control input-one" name="name" value="<?php echo e($idea->name); ?>" placeholder="Name">
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>Logo</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <p> <a href="<?php echo e(route('change-password')); ?>"> Change logo  &nbsp;<i class="fa fa-angle-right blue"></i> </a></p>
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>Tagline</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <input data-parsley-required type="text" class="form-control input-one" name="name" value="<?php echo e($idea->tagline()); ?>" placeholder="Tagline">
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>Description</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <textarea data-parsley-required type="text" class="form-control input-one" name="name" value="<?php echo e($idea->description()); ?>" placeholder="Description"><?php echo e($idea->description()); ?></textarea>
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>URL</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <input data-parsley-required type="text" class="form-control input-one" name="name" value="<?php echo e($idea->url()); ?>" placeholder="URL">
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>Location</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <input data-parsley-required type="text" class="form-control input-one" name="location" value="<?php echo e($idea->location()); ?>" placeholder="Location">
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>Video</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <input data-parsley-required type="text" class="form-control input-one" name="name" value="<?php echo e($idea->video()); ?>" placeholder="Video">
          </div>
        </div>
      </div>



    </div>
  </div>
</div>
