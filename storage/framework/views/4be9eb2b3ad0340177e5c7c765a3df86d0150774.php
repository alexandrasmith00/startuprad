<div class="row">
  <div class="col-md-12">
    <div class="widget-wrap material-table-widget">
        <div class="widget-container margin-top-0">


            <div class="widget-content">
                <div class="data-action-bar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget-header">
                                <h3> <?php echo e($cohort->name); ?> RAD</h3>
                                <p>
                                    Startups
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php if($cohort->ideas->count() > 0): ?>
                  <table class="table data-tbl">
                    <thead>
                    <tr>
                        <th> <span style="padding-left: 40px;" >Name</span> </th>
                        <th> Team Members </th>
                        <th> Posts</th>
                        <th> Comments</th>
                        <th> Thanks</th>
                        <th> Profile Completion </th>
                    </tr>
                    </thead>

                    <tbody>
                        
                        <?php foreach($cohort->ideas as $project): ?>

                            <tr>
                                <td>
                                    <a href="/project/<?php echo e($project->id); ?>" class="td-profile-thumb">
                                        <img src="images/img-3-thumb.jpg" alt="image"></a>
                                    </a>
                                    <a href="/project/<?php echo e($project->id); ?>">
                                        <span style="padding-left: 10px;" ><?php echo e($project->name); ?></span>
                                    </a>
                                </td>
                                <td>
                                  <?php foreach($project->team->users as $member): ?>
                                    <a href="#" class="td-profile-thumb"><img src="images/avatar/michael-owens.jpg" alt="user"></a>
                                  <?php endforeach; ?>
                                </td>
                                <td> 51 </td>
                                <td> 61 </td>
                                <td> 73 </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress="60"></div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                    </table>
                <?php endif; ?>

        </div>
        </div>
    </div>
</div>
</div>

<?php $__env->startSection('scripts'); ?>
<script src="js/lib/jquery.dataTables.js"></script>
<script src="js/lib/dataTables.responsive.js"></script>
<script src="js/lib/dataTables.tableTools.js"></script>
<script src="js/lib/dataTables.bootstrap.js"></script>
<?php $__env->stopSection(); ?>