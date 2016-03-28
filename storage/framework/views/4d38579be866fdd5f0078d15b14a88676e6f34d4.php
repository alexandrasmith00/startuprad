<div id="add-border" class="widget-header clearfix">
    <div>
        <h3>Organization</h3>
        <p><?php echo e($organization_title); ?></p><br/>
    </div>
</div>

<div class="widget-container margin-top-0">
  <div class="widget-content">
    <div class="task-widget">
      <div class="widget-task-list recent-users-list">

          <?php foreach($fields as $key => $vals): ?>
            <?php foreach($vals as $value): ?>
                <div class="task-entry">
                  <div class="task-intro">
                    <div class="task-title">
                        <span class="emph"><?php echo e($key); ?>:</span>  <?php echo e($value); ?>

                    </div>
                  </div>
                </div>
            <?php endforeach; ?>
          <?php endforeach; ?>
          
            <?php if($isYours): ?>
                <button class="btn btn-link btn-block btn-loadmore">Edit Organization</button>
            <?php endif; ?>
            
        </div>
      </div>

  </div>
</div>                      
