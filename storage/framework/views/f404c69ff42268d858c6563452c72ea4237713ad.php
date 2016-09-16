
<div style="padding-top: 30px;" class="details">

  <h4>Value Chain &nbsp; &nbsp; <i class="fa fa-pencil"></i></h4><br>

  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Customer</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->customer()): ?> <?php echo e($idea->customer()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Customer Description <?php endif; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Demands</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->demands()): ?> <?php echo e($idea->demands()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Customer Need <?php endif; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Product</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->product()): ?> <?php echo e($idea->product()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Product <?php endif; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Value</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->value()): ?> <?php echo e($idea->value()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Value Proposition <?php endif; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Use Case</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p><?php if($idea->useCase()): ?> <?php echo e($idea->useCase()); ?> <?php else: ?> <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Use Case <?php endif; ?></p>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>

