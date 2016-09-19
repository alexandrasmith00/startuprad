<div class="form-line form-labels">
  <div class="row">
    <div class="col-sm-3 col-xs-12">
      <label>
        <?php if($formTitle == 'Facebook'): ?>
          <label><i class="fa fa-facebook blue"></i></label>
        <?php elseif($formTitle == 'Twitter'): ?>
          <label><i class="fa fa-twitter blue"></i></label>
        <?php elseif($formTitle == 'LinkedIn'): ?>
          <label><i class="fa fa-linkedin blue"></i></label>
        <?php else: ?>
          <?php echo e($formTitle); ?>

        <?php endif; ?>
      </label>
    </div>
    <div class="col-sm-9 col-xs-12">


      <!--* * * * * * * * * -->
      <!--  Overview Inputs -->
      <!--* * * * * * * * * -->
      <?php if($formTitle == 'Name'): ?>
        <input data-parsley-required type="text" class="form-control input-one" name="name" value="<?php echo e($idea->name); ?>" placeholder="Name">
      <?php endif; ?>
      <?php if($formTitle == 'Logo'): ?>
        <p><a href="<?php echo e(route('edit-logo')); ?>"> Change logo  &nbsp;<i class="fa fa-angle-right blue"></i> </a></p>
      <?php endif; ?>
      <?php if($formTitle == 'Tagline'): ?>
        <input type="text" class="form-control input-one" name="tagline" value="<?php echo e($idea->tagline()); ?>" placeholder="Tagline">
      <?php endif; ?>
      <?php if($formTitle == 'Description'): ?>
        <textarea type="text" class="form-control input-one" name="description" value="<?php echo e($idea->description()); ?>" placeholder="Description"><?php echo e($idea->description()); ?></textarea>
      <?php endif; ?>
      <?php if($formTitle == 'URL'): ?>
        <input type="url" class="form-control input-one" name="url" value="<?php echo e($idea->url()); ?>" placeholder="URL">
      <?php endif; ?>
      <?php if($formTitle == 'Location'): ?>
        <input type="text" class="form-control input-one" name="location" value="<?php echo e($idea->location()); ?>" placeholder="Location">
      <?php endif; ?>
      <?php if($formTitle == 'Video'): ?>
        <input type="url" class="form-control input-one" name="video" value="<?php echo e($idea->video()); ?>" placeholder="Video">
      <?php endif; ?>

      <!--* * * * * * * * * -->
      <!--Social Media Inputs-->
      <!--* * * * * * * * * -->
      <?php if($formTitle == 'Facebook'): ?>
        <input type="url" class="form-control input-one" name="facebook" value="<?php echo e($idea->facebook()); ?>" placeholder="Facebook Profile Link">
      <?php endif; ?>
      <?php if($formTitle == 'Twitter'): ?>
        <input type="url" class="form-control input-one" name="twitter" value="<?php echo e($idea->twitter()); ?>" placeholder="Twitter Profile Link">
      <?php endif; ?>
      <?php if($formTitle == 'LinkedIn'): ?>
        <input type="text" class="form-control input-one" name="linkedIn" value="<?php echo e($idea->linkedIn()); ?>" placeholder="LinkedIn Profile Link">
      <?php endif; ?>


      <!--* * * * * * * * * -->
      <!--Value Chain Inputs-->
      <!--* * * * * * * * * -->
      <?php if($formTitle == 'Customer'): ?>
        <textarea type="text" class="form-control input-one" name="customer" value="<?php echo e($idea->customer()); ?>" placeholder="Customer Description"><?php echo e($idea->customer()); ?></textarea>
      <?php endif; ?>
      <?php if($formTitle == 'Demands'): ?>
        <textarea type="text" class="form-control input-one" name="demands" value="<?php echo e($idea->demands()); ?>" placeholder="Demands"><?php echo e($idea->demands()); ?></textarea>
      <?php endif; ?>
      <?php if($formTitle == 'Product'): ?>
        <textarea type="text" class="form-control input-one" name="product" value="<?php echo e($idea->product()); ?>" placeholder="Product"><?php echo e($idea->product()); ?></textarea>
      <?php endif; ?>
      <?php if($formTitle == 'Value'): ?>
        <textarea type="text" class="form-control input-one" name="value" value="<?php echo e($idea->value()); ?>" placeholder="Value"><?php echo e($idea->value()); ?></textarea>
      <?php endif; ?>
      <?php if($formTitle == 'Use Case'): ?>
        <textarea type="text" class="form-control input-one" name="useCase" value="<?php echo e($idea->useCase()); ?>" placeholder="Use Case"><?php echo e($idea->useCase()); ?></textarea>
      <?php endif; ?>


      <!--* * * * * * * * * -->
      <!-- Strategy Inputs  -->
      <!--* * * * * * * * * -->
      <?php if($formTitle == 'Market'): ?>
        <textarea type="text" class="form-control input-one" name="market" value="<?php echo e($idea->market()); ?>" placeholder="Market Description"><?php echo e($idea->market()); ?></textarea>
      <?php endif; ?>
      <?php if($formTitle == 'Competition'): ?>
        <textarea type="text" class="form-control input-one" name="competition" value="<?php echo e($idea->competition()); ?>" placeholder="Competition"><?php echo e($idea->competition()); ?></textarea>
      <?php endif; ?>
      <?php if($formTitle == 'Marketing'): ?>
        <textarea type="text" class="form-control input-one" name="marketing" value="<?php echo e($idea->marketing()); ?>" placeholder="Marketing"><?php echo e($idea->marketing()); ?></textarea>
      <?php endif; ?>
      <?php if($formTitle == 'Business Model'): ?>
        <textarea type="text" class="form-control input-one" name="businessModel" value="<?php echo e($idea->businessModel()); ?>" placeholder="Business Model"><?php echo e($idea->businessModel()); ?></textarea>
      <?php endif; ?>



    </div>
  </div>
</div>
