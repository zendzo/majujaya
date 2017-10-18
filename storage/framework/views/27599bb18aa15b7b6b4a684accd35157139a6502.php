<!-- User Account Menu -->
<li class="dropdown user user-menu">
    <!-- Menu Toggle Button -->
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <!-- The user image in the navbar-->
        <img src="<?php echo e(asset("AdminLTE/dist/img/user-avatar.png")); ?>" class="user-image" alt="User Image"/>
        <!-- hidden-xs hides the username on small devices so only the image appears. -->
        <span class="hidden-xs"><?php echo e(Auth::user()->fullName()); ?></span>
    </a>
    <ul class="dropdown-menu">
        <!-- The user image in the menu -->
        <li class="user-header">
            <img src="<?php echo e(asset("AdminLTE/dist/img/user-avatar.png")); ?>" class="img-circle" alt="User Image" />
            <p>
                <?php echo e(Auth::user()->fullName()); ?>

                <small><?php echo e(Auth::user()->role->name); ?></small>
                <small><?php echo e(Auth::user()->updated_at->diffForHumans()); ?></small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
            <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
            </div>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="<?php echo e(url('/user/profile',Auth::id())); ?>" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="<?php echo e(route('logout')); ?>" class="btn btn-default btn-flat"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
        </li>
    </ul>
</li>