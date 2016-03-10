<?php $__env->startSection('content'); ?>


<div class="row">
  <div class="col-md-3">
    <?php echo $__env->make('includes.profile.about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('includes.profile.organization', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
    
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <?php echo $__env->make('includes.profile.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
        <div class="tab-content">

            <?php echo $__env->make('includes.profile.activity', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <div class="tab-pane" id="profile">
                    <!-- The timeline -->

                    <?php echo $__env->make('projects.templates.field', array('fieldname'=>'Description', 'fieldbody' => $project->description), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('projects.templates.field', array('fieldname'=>'Product Idea', 'fieldbody' => $project->product_idea), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('projects.templates.field', array('fieldname'=>'Elevator Pitch', 'fieldbody' => $project->elevator_pitch), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('projects.templates.field', array('fieldname'=>'Pitch Video', 'fieldbody' => $project->pitch_video), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('projects.templates.field', array('fieldname'=>'Slide Deck', 'fieldbody' => $project->slide_deck), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                      
                      <div class="row">
                        <div class="col-sm-2">
                            <div class="profile-fieldname">Customer</div>
                        </div>  
                        <div class="col-sm-10">
                            <b>Your Customer  :  </b>
                            
                            <br/><br/>
                            
                            <b>Their Unmet Need  :  </b>
                            
                            <br/><br/>
                            
                            <b>How <?php echo e($project->name); ?> Is Meeting It  :  </b>
                            
                            <br/><br/>

                            <b>The Result  :  </b>

                        </div>
                    </div>

                  </div><!-- /.tab-pane -->
                  <?php if($isYours): ?>
                      <div class="tab-pane" id="settings">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputName" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div><!-- /.tab-pane -->
                    <?php endif; ?>
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    function makeActive() {
        
        $('ul.nav-tabs li.active').removeClass('active');
        $('#profile-tab').addClass('active');
    }
    
    function doThisOnLoad() {
        $("offcanvas").toggle();
    }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>