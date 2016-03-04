 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo e(Auth::user()->name); ?></p>
                
                <a href="#"><i class="fa fa-circle text-success"></i>Online</a>        
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
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