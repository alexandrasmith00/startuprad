<div class="widget-wrap">
  <div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Declarations</h3>
        <p>All the goals your team has set.</p>
    </div>
      
  </div>
    
  <div class="widget-container margin-top-0">
    <div class="widget-content">
      <div class="task-widget">
        <div class="widget-task-list todo-tasklist">
          
          <?php echo $__env->make('includes.deliverables.task', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php echo $__env->make('includes.deliverables.task', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php echo $__env->make('includes.deliverables.task', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php echo $__env->make('includes.deliverables.new', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
      </div>
    </div>
  </div>
    
</div>