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
  <header class="menu-header">
<!--    <img height="32px" src="/img/lexi.png">-->
    <span class="menu-header-title"><?php echo e(Auth::user()->name); ?></span>
  </header>
</a>

<section class="menu-section">
  <h3 class="menu-section-title">Dashboard</h3>
  <ul class="menu-section-list">
    <li><a href="">Home</a></li>
    <li><a href="" >Profile</a></li>
  </ul>
</section>



</section>


<section class="menu-section">
  <!--  <h3 class="menu-section-title">People</h3>-->
  <ul class="menu-section-list">
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

  });

</script>

<?php $__env->stopSection(); ?>
