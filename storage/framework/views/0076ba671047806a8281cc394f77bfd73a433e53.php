<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Equity Split</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <?php if($idea->equitySplit()): ?> <?php echo e($idea->equitySplit()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Equity Split <?php endif; ?></p>
</div>
</div>

<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Outside Investors</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <?php if($idea->outsideInvestors() != '[]'): ?>
    <?php foreach($idea->outsideInvestors() as $investor): ?>
    <p><?php echo e(resourceHelper($investor, 'Name')); ?></p>
    <?php endforeach; ?>
    <?php else: ?>
    <p><i class="blue fa fa-exclamation-circle"></i> &nbsp; No Outside Investors</p>
    <?php endif; ?>
  </div>
</div>

<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Funding Round</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <p><?php if($idea->fundingRound()): ?> <?php echo e($idea->fundingRound()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Funding Round <?php endif; ?></p>
  </div>
</div>

<div class="row">
  <div class="col-sm-4 col-xs-12">
    <label><strong>Debt Equity</strong></label>
  </div>
  <div class="col-sm-8 col-xs-12">
    <p><?php if($idea->debtEquity()): ?> <?php echo e($idea->debtEquity()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp;  No Debt Equity <?php endif; ?></p>
  </div>
</div>
