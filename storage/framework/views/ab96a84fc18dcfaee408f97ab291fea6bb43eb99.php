<?php foreach($idea->TFs() as $instructor): ?>
<div class="form-line form-labels">
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <label><strong>Teaching Fellow</strong></label>
    </div>
    <div class="col-sm-8 col-xs-12">
      <p>
        <?php echo e($instructor->name); ?><a href="<?php echo e(route('profile', ['id' => $instructor->id ])); ?>"> <i class="fa fa-angle-right"></i></a><br>
        <a href=""><?php echo e($instructor->email); ?></a>
      </p>
    </div>
  </div>
</div>
<?php endforeach; ?>
