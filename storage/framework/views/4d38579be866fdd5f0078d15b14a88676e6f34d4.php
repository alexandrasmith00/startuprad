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
                        <span class="emph"><?php echo e($key); ?><?php if($value != ""): ?>:</span> <?php echo e($value); ?><?php else: ?></span><?php endif; ?>
                    </div>
                  </div>
                </div>
            <?php endforeach; ?>
          <?php endforeach; ?>
          
            
        </div>
      </div>
  </div>
</div>                      
