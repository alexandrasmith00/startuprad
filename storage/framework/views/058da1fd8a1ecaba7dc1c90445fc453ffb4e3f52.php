      
    <div class="widget-wrap">
      <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="activities-timeline">
        <h3 class="tab-pane-header">Recent Activity</h3>
        <ul class="activities-list">
            
<!--            iterate over all activity in foreach-->
            <?php echo $__env->make('includes.activity.badge', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
        </ul>
    </div>
      </div>
    </div>