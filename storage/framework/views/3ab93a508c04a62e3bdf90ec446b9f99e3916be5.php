 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo e(Auth::user()->profile_picture != "" ? Auth::user()->profile_picture : 'http://www.startuprad.com/assets/images/db414718.default_no_profile.jpg'); ?>" class="img-circle" />
            </div>
            <div class="pull-left info">
              <p><?php echo e(Auth::user()->name); ?></p>
              <a href="/project/<?php echo e(Auth::user()->idea->id); ?>"><?php echo e(Auth::user()->idea->name); ?></a>        
            </div>
          </div>

<!--
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
-->

          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>              
            <li class="treeview">
              <a href="#">
                <i class="fa fa-lightbulb-o"></i> <span>Startups</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                                  
                <li><a href="/project" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><i class="fa fa-circle-o"></i>View All</a></li>
 
                <?php foreach(Auth::user()->cohorts as $cohort): ?>
                        <?php foreach($cohort->ideas as $project): ?>
                            <li><a href="/project/<?php echo e($project->id); ?>" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><i class="fa fa-circle-o"></i><?php echo e($project->name); ?></a></li>
                        <?php endforeach; ?>
                <?php endforeach; ?>
              </ul>
            </li>
              
              

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>