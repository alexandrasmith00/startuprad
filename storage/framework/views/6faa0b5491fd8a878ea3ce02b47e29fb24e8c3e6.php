<style>
  @media  screen and (min-width: 780px) {
    .slideout-panel {
      margin-left: 256px;
    }

    .slideout-menu {
      display: block;
    }

    .btn-hamburger {
      display: none;
    }
  }

  ul.submenu > li {
    padding-left: 15px;
  }

</style>

<a href="">
  <header style="padding-top: 0px;" class="menu-header">
    <img style="vertical-align: top; margin-top: 16px;"  height="32px" src="<?php echo e(Auth::user()->profile_picture); ?>">
    <div style=" display: inline-block;" class="user-details">
      <div style="margin-top: 10px;" class="menu-header-title"><?php echo e(Auth::user()->name); ?></div>
      <div style="line-height: 12px; font-size: 12px;" class="subheader">
        <?php if( Auth::user()->companyRole() ): ?>
          <?php echo e(Auth::user()->companyRole()); ?> at
        <?php endif; ?>
        <?php echo e(Auth::user()->team()->idea->name); ?>

      </div>
    </div>

  </header>
</a>

<section class="menu-section">
  <h3 class="menu-section-title">Dashboard</h3>
  <ul class="menu-section-list">
    <li><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
    <li><a href="<?php echo e(route('my-profile')); ?>">Profile</a></li>
    <li><a href="<?php echo e(route('project.show', ['id' => Auth::user()->team()->idea->id ])); ?>"><?php echo e(Auth::user()->team()->idea->name); ?></a></li>

  </ul>
</section>

<?php if( Auth::user()->isStaff() ): ?>
<section class="menu-section">
  <h3 class="menu-section-title">Admin</h3>
  <ul class="menu-section-list">
<!--    <li><a href="">Analytics</a></li>-->
    <?php if(Auth::user()->hasRole('Admin')): ?>
<!--    <li><a href="">Advisors</a></li>-->
    <li><a href="<?php echo e(route('student-invite')); ?>">Invite Rad</a></li>

    <?php endif; ?>
  </ul>
</section>
<?php endif; ?>


<?php if( Auth::user()->isStudent() ): ?>
<?php foreach(Auth::user()->cohorts as $cohort): ?>
<section class="menu-section">
  <h3 class="menu-section-title"><?php echo e($cohort->name); ?></h3>
  <ul class="menu-section-list">
    <li><a href="#cohort-<?php echo e($cohort->id); ?>" data-toggle="collapse">View All
      <span id="#cohort-<?php echo e($cohort->id); ?>-arrow" class="pull-right"><i class="fa fa-angle-right"></i></span></a>
    </li>

    <div id="cohort-<?php echo e($cohort->id); ?>" class="collapse cohort-collapse">

      <?php foreach($cohort->ideas as $idea): ?>
      <li><a style="padding-left: 25px;" href="<?php echo e(route('project.show', ['id' => $idea->id ])); ?>"><?php echo e($idea->name); ?></a></li>
      <?php endforeach; ?>
    </div>


  </ul>
</section>

<?php endforeach; ?>
<?php endif; ?>



<section class="menu-section">
  <!--  <h3 class="menu-section-title">People</h3>-->
  <ul class="menu-section-list">
    <li><a href="<?php echo e(route('settings')); ?>">Settings</a></li>
    <li><a data-toggle="modal" href="#feedback-modal">Feedback</a></li>
    <li><a href="/logout">Logout<span class="pull-right"><i class="fa fa-angle-right"></i></span></a></li>
  </ul>
</section>


<?php $__env->startSection('scripts'); ?>
@parent

<script>

  $(document).ready(function() {

    // Slideout Variable
    var slideout = new Slideout({
      'panel': document.getElementById('main'),
      'menu': document.getElementById('menu'),
      'fx' : "linear",
      'padding': 256,
      'tolerance': 70,
    });

    // Toggle button
    $('#slideout').click(function() {
      slideout.toggle();
    });

    $('.cohort-collapse').on('hide.bs.collapse', function (e) {
    })

    $('.cohort-collapse').on('show.bs.collapse', function (e) {
      var icon = '#' + e.currentTarget.id + '-arrow';
      $("#cohort-1-arrow").html('');

      console.log(icon);
//      $('#' + e.currentTarget.id + '-arrow').addClass('fa-angle-down');
    })

  });

</script>

<?php $__env->stopSection(); ?>
