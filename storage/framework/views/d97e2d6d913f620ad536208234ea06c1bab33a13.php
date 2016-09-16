<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Partnerships</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <p>
      <?php if($idea->partnerships()): ?>
        <?php foreach($idea->partnerships() as $partnership): ?>
          <?php foreach($partnership as $cool): ?>
          <p> <?php echo e($cool); ?></p><br>
    <?php endforeach; ?>
        <?php endforeach; ?>
      <?php else: ?>
        <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Partnerships
      <?php endif; ?>
    </p>
  </div>
</div>
