<div class="widget-wrap">
    <div class="widget-header block-header margin-bottom-0 clearfix">
        <div>
            <h3>Team</h3>
        </div>
    </div>
        
    <div class="widget-content">
      <div class="recent-users">
        <div class="recent-users-list">
            
            
         <?php foreach($this_profile->team as $team): ?>
            <?php echo $__env->make('includes.profile.team-member', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php endforeach; ?> 

            
            <?php if($isYours): ?>
                <button class="btn btn-link btn-block btn-loadmore">Edit Team</button>
            <?php endif; ?>
            
        </div>        
      </div>
    </div>
</div>
