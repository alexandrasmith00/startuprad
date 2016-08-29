<?php $__env->startSection('content'); ?>

<main role="main">

  <style>
    .pdf-header {
      width: 100%;
      background-image: url("http://startuprad.com/images/background_extra_wide.jpg");
      background-size: cover;
      height: 100%;
    }

    body {
      background-color: white;
    }
  </style>

  <section style="padding-left: 50px; padding-right: 50px;" class="pdf-header">
    <h3 style="font-family: Roboto; color: white; padding-top: 25px;">Startup RAD</h3>
    <h5 style="font-family: Roboto; color: #5F666C;">New Application</h5>
    <h5 style="font-family: Roboto; padding-bottom: 25px; color: #5F666C;"><?php echo e(date("F j, Y @ g:i a", strtotime($application->created_at))); ?></h5>
  </section>


  <section style="padding-top: 10px; padding-bottom: 0px;" class="section" >
    <div class="container">

      <div id="details" class="row">
        <div class="col-xs-12">
          <h2 class="section-heading" style="font-family: Roboto;"><b>Founders (<?php echo e($application->applicants->count()); ?>)</b><span class="border"></span></h2>
        </div>
        <?php foreach($application->applicants as $applicant): ?>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp;
            <?php echo e($applicant->first); ?> <?php echo e($applicant->last); ?>

            <br><?php echo e($applicant->email); ?>

            <br>Class of <?php echo e($applicant->year); ?>

            <br> <?php echo e($applicant->concentration); ?>

            <br> <?php echo e($applicant->secondary); ?>

            <br> <a href="<?php echo e($applicant->resume); ?>">View resume</a>
          </p>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <section style="padding-top: 10px;" class="section" >
    <div class="container">

      <div id="details" class="row">
        <div class="col-xs-12">
          <h2 class="section-heading" style="font-family: Roboto;"><b>Startup</b><span class="border"></span></h2>
        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp; <?php echo e($application->team); ?></p>
        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp;
            <?php if($application->url != ''): ?>
              <a href="<?php echo e($application->url); ?>"><?php echo e($application->url); ?></a>
            <?php else: ?>
              <i>No URL provided</i>
            <?php endif; ?>
          </p>
        </div>
        <div class="col-xs-4">
          <p><i class="fa fa-angle-right blue"></i>&nbsp; <a href="<?php echo e($application->video); ?>"><?php echo e($application->video); ?></a></p>
        </div>
        <hr>
        <div class="col-xs-12">
          <p><i class="fa fa-angle-right blue"></i>&nbsp; <?php echo e($application->description); ?> </p>
      </div>
    </div>
  </section>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pdf', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>