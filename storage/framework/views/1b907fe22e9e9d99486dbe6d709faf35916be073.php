<div class="user-profile clearfix">
    <div class="admin-user-thumb">
        <img src="images/avatar/jaman_01.jpg" alt="admin">
    </div>
    <div class="admin-user-info">
        <ul>
            <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li>
            <li><a href="/project/<?php echo e(Auth::user()->idea->id); ?>"><?php echo e(Auth::user()->idea->name); ?></a></li>
        </ul>
    </div>
</div>