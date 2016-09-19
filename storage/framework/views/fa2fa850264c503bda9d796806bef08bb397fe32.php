<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Partnerships</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <p>
      <?php if($idea->partnerships() != '[]'): ?>
      <?php foreach($idea->partnerships() as $partnership): ?>
    <p><?php echo e(resourceHelper($partnership, 'Partnership')); ?></p>
    <?php endforeach; ?>
    <?php else: ?>
    <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Partnerships
    <?php endif; ?>
    </p>
</div>
</div>
