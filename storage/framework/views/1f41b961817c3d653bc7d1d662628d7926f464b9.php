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

            <div class="dropdown">
              <button type="button" class="btn dropdown-toggle btn btn-link btn-block btn-loadmore"  data-toggle="collapse" data-target="#collapseteam" aria-expanded="false" aria-controls="collapseteam">Edit Team</button>
              <div class="collapse" id="collapseteam">
                <ul>
                    
                    <?php foreach($this_profile->team as $team): ?>
                      <?php foreach($team as $field): ?>
                        <?php if($field->descriptor == 'Name'): ?>
                          <li><a href="#" id="team-<?php echo e($field->thinking_id); ?>" class="editable" >Edit <?php echo e($field->value); ?></a></li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    <?php endforeach; ?> 
                    
                    <li><a href="#" id="team" class="editable" >Add A Team Member</a></li>
                </ul>
              </div>
            </div>

          <?php endif; ?>
        </div>        
      </div>
    </div>
</div>


<?php $__env->startSection('scripts'); ?>
@parent


    <script id="team-add-to-form" type="text/template">
        <input type="hidden" name="type" value="newteam">
        <input type="hidden" id="resource_id" name="resource_id" value="">

       <div class="unit">
            <label class="label">Name</label>
            <div class="input">
                <input id="edit-name" class="form-control" type="text" name="team-name" placeholder=""/> 
            </div>
        </div>
        
       <div class="unit">
            <label class="label">Role</label>
            <div class="input">
                <input id="edit-name" class="form-control" type="text" name="team-role" placeholder=""/> 
            </div>
        </div>
        
       <div class="unit">
            <label class="label">Email</label>
            <div class="input">
                <input id="edit-name" class="form-control" type="text" name="team-email" placeholder=""/> 
            </div>
        </div>
    </script>

<?php $__env->stopSection(); ?>
