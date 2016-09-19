
<div style="padding-top: 30px;" class="details">

  <?php if($edit): ?>
    <h4><a class="edit-section" href="<?php echo e(route('edit-strategy')); ?>">Edit Strategy &nbsp; <i class="fa fa-angle-right"></i></a></h4><br>
  <?php else: ?>
    <h4>Strategy</h4><br>
  <?php endif; ?>


  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Market</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->market()): ?> <?php echo e($idea->market()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Defined Market <?php endif; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Competition</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->competition()): ?> <?php echo e($idea->competition()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Competitive Landscape <?php endif; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Marketing</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->marketing()): ?> <?php echo e($idea->marketing()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Marketing <?php endif; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Business Model</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->businessModel()): ?> <?php echo e($idea->businessModel()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Business Model <?php endif; ?></p>
          </div>
        </div>

      </div>



    </div>
  </div>
</div>

