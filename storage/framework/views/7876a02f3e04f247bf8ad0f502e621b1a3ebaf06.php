<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Legal Status</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <p><?php if($idea->legalStatus()): ?> <?php echo e($idea->legalStatus()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Legal Status <?php endif; ?></p>
  </div>
</div>

<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Lawyers</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <p>
      <?php if($idea->lawyers() != '[]'): ?>
      <?php foreach($idea->lawyers() as $lawyer): ?>
    <p><?php echo e(resourceHelper($lawyer, 'Name')); ?> @ <?php echo e(resourceHelper($lawyer, 'Firm')); ?> </p>
    <?php endforeach; ?>
    <?php else: ?>
    <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Partnerships
    <?php endif; ?>
    </p>
</div>
</div>

