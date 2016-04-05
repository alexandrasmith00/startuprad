<div class="widget-wrap stats-widget">
    <div class="widget-header">
        <h3><?php echo e($topic); ?></h3>
        <p><?php echo e($label); ?></p>
    </div>
    
    <?php if($content != ""): ?>
         <div class="widget-content">
          <div class="recent-users">
            <div style="margin-bottom: 0px;" class="recent-users-list">

              <div class="individual-user" style="border-top: #eee 1px solid;">
                <div style="margin: 5px" class="user-intro">
                    <?php if($topic == 'Description'): ?>
                      <div style="text-align: center;" class="users-info">
                        <ul><li><label><h3><?php echo e($content); ?></h3></label></li></ul>
                      </div>
                    <?php else: ?>
                       <div class="users-info">
                        <ul><li><label><?php echo e($content); ?></label></li></ul>
                      </div>                   
                    <?php endif; ?>
                </div>
              </div>

            </div>        
          </div>
        </div>


        <?php if($isYours): ?>
          <div class="recent-users-list">
            <button id="<?php echo e($topic); ?>" class="btn btn-link btn-block btn-loadmore editable" style="padding: 6px 12px; text-transform: capitalize;">Edit <?php echo e($topic); ?></button>

        </div>
        <?php endif; ?>
    
    <?php else: ?>
    
        <?php if($isYours): ?>
          <div class="recent-users-list">
            <button id="<?php echo e($topic); ?>" class="btn btn-link btn-block btn-loadmore editable" style="padding: 6px 12px; text-transform: capitalize;">Add Your <?php echo e($topic); ?></button>

        </div>
        <?php else: ?>
             <div class="widget-content">
              <div class="recent-users">
                <div class="recent-users-list">

                  <div class="individual-user" style="border-top: #eee 1px solid;">
                    <div class="user-intro">
                       <div style="text-align: center;" class="users-info">
                        <ul><li><label><h4><a>Coming soon!</a></h4></label></li></ul>
                      </div>                   
                    </div>
                  </div>

                </div>        
              </div>
            </div>
    
        <?php endif; ?>
    
    <?php endif; ?>

</div>

<?php $__env->startSection('scripts'); ?>
@parent

    <script id="<?php echo e($topic); ?>-add-to-form" type="text/template">
      <input type="hidden" name="type" value="<?php echo e($topic); ?>">

       <div class="unit">
            <label class="label"><?php echo e($topic); ?></label>
            <div class="input">
                <textarea id="edit-tagline" style="resize: none; overflow: hidden; word-wrap: break-word; height: 62px;" rows="1" class="form-control" type="text" name="<?php echo e($topic); ?>" placeholder="<?php echo e($content != "" ? $content : ''); ?>"></textarea> 
            </div>
        </div>
    </script>

<?php $__env->stopSection(); ?>
   
