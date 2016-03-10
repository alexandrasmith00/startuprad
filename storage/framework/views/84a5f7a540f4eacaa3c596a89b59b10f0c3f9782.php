this is the project profile that displays everywhere. <br/>
<br/><br/>

<a id="name" class="project-name"><?php echo e($project->name); ?></a> 
    <?php if($isYours): ?>
        <a name="name" class="editable" ><i class="fa fa-pencil"></i></a>
    <?php endif; ?>
<br/><a id="tagline" class="project-tagline"><?php echo e($project->tagline); ?></a> 
    <?php if($isYours): ?>
        <a name="tagline" class="editable" ><i class="fa fa-pencil"></i></a>
    <?php endif; ?>
<br/><a id="website" class="project-website"><?php echo e($project->website); ?></a> 
    <?php if($isYours): ?>
        <a name="website" class="editable" ><i class="fa fa-pencil"></i></a>
    <?php endif; ?>
<br/><a id="logo" class="project-logo"><?php echo e($project->logo); ?></a> 
    <?php if($isYours): ?>
        <a name="logo" class="editable" ><i class="fa fa-pencil"></i></a>
    <?php endif; ?>

