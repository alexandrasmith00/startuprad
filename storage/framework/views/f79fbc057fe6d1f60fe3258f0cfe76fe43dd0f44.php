<?php $__env->startSection('content'); ?>



       
<div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Startup RAD Projects</h3>

                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-hover">
                    <tbody>
                        
                                                
                      <?php foreach(Auth::user()->cohorts as $cohort): ?>

                        <?php foreach($cohort->ideas as $project): ?>
                        
                          <tr>
                              <td><?php echo e($project->name); ?> </td>  
                  
                          </tr>
                      
                        <?php endforeach; ?>
                      <?php endforeach; ?>
                            

                    </tbody>
                  </table>
                    
                    
                </div><!-- ./box-body -->
                <div class="box-footer">
                  <div class="row">
                  
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->


<!--
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Here are users</div>

                <div class="panel-body">
                    All projects in current user's cohorts
                    <br>

                            
                            <?php foreach(Auth::user()->cohorts as $cohort): ?>
                                <?php echo e($cohort->name); ?>

                    
                                <?php foreach($cohort->ideas as $project): ?>
                                    <a href="/project/<?php echo e($project->id); ?>"> <?php echo e($project->name); ?></a><br>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                            

                
                </div>
            </div>
        </div>
    </div>
</div>
-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>