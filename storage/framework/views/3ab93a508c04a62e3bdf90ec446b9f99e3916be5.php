<nav class="sidebar-menu st-effect-2" id="menu-2">
    <h4><span class="brand">RADs</span></h4>
    <ul>
        
                                    
        <?php foreach(Auth::user()->cohorts as $cohort): ?>
            <li><a class="cohort"><?php echo e($cohort->name); ?></a></li>
        
            <?php foreach($cohort->ideas as $project): ?>
                <li><a href="/project/<?php echo e($project->id); ?>"><?php echo e($project->name); ?></a></li>
            <?php endforeach; ?>
        
        <?php endforeach; ?>
       

    </ul>
    
</nav>