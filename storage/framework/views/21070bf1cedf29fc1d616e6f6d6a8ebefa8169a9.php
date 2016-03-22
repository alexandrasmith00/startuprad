<ul class="list-accordion tree-style">
    <li class="list-title">Startups</li>


        <?php foreach(Auth::user()->cohorts as $cohort): ?>
        <li>
            <a href="#"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label"><?php echo e($cohort->name); ?></span></a>
            <ul>
               <li><a href="/project">View All</a></li>
                <?php foreach($cohort->ideas as $project): ?>
                    <li><a href="/project/<?php echo e($project->id); ?>"><?php echo e($project->name); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </li>
        <?php endforeach; ?>
</ul>