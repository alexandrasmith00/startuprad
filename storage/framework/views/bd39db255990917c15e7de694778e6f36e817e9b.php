
      <header class="main-header">
          
        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>RAD</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Startup <b>RAD</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <?php echo $__env->make('includes.header.notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              <?php echo $__env->make('includes.header.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
-->
            </ul>
          </div>
        </nav>
      </header>