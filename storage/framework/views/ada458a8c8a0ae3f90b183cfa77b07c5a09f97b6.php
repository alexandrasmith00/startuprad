<!-- <div class="individual-user info-expand">-->
<div class="individual-user">
    <div class="user-intro">
<!--        <div class="user-thumb"><a href="#"><img src="images/avatar/bobbyjkane.jpg" alt="user"></a></div>-->
        <div class="users-info">
            <ul>
                <li class="u-name"><a href="#"><?php echo e($member->name); ?></a></li>
                <li class="u-location">Co-Founder</li>
            </ul>
        </div>
        <span class="user-details-toggle"><i class="zmdi"></i></span>
    </div>
    <div class="users-details">
        <label>Email:</label> <?php echo e($member->email); ?>

    </div>
</div>