<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Advisors</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">

    <?php if($idea->advisors() != '[]'): ?>
      <?php foreach($idea->advisors() as $advisor): ?>
        <p><?php echo e(resourceHelper($advisor, 'Advisor')); ?></p>
      <?php endforeach; ?>
    <?php else: ?>
      <p><i class="blue fa fa-exclamation-circle"></i> &nbsp; No Advisors</p>
    <?php endif; ?>

  </div>
</div>
