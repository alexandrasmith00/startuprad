<div id="partnerships">

    <?php if($idea->partnerships() != '[]'): ?>
      <?php foreach($idea->partnerships() as $partnership): ?>

        <div class="form-line form-labels">
          <div class="row">
            <div class="col-sm-3 col-xs-12">
              <label></label>
            </div>
            <div class="col-sm-8 col-xs-12">
              <input type="text" class="form-control input-one" name="partnership" value="<?php echo e(resourceHelper($partnership, 'Partnership')); ?>" placeholder="Partnership">
            </div>
            <div class="col-sm-1">
              <p><i class="fa fa-times-circle blue"></i></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
</div>
    <?php endif; ?>

    <div class="form-line form-labels">
      <div class="row">
        <div class="col-sm-3 col-xs-12">
          <label></label>
        </div>
        <div class="col-sm-9 col-xs-12">
          <p> <a onclick="newPartnerForm();"> Add partnership  &nbsp;<i class="fa fa-angle-right blue"></i> </a></p>
        </div>
      </div>
    </div>


<?php $__env->startSection('scripts'); ?>
@parent
<script>

  function newPartnerForm() {
    var newPartnerInput = '<div class="form-line form-labels"><div class="row"><div class="col-sm-3 col-xs-12"><label></label></div><div class="col-sm-8 col-xs-12"><input type="text" class="form-control input-one" name="partnership" placeholder="New Partnership"></div><div class="col-sm-1"><p><i class="fa fa-times-circle blue"></i></p></div></div></div>';

    $("#partnerships").append(newPartnerInput);
  }



</script>
<?php $__env->stopSection(); ?>
