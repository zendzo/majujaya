        <header class="main-header">

            <!-- Logo -->
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="logo"><?php echo e(config('app.name')); ?></a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <?php if(Auth::user()->role_id === 1 ): ?>
                            <?php echo $__env->make('layouts.partials.notification_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endif; ?>

                        <?php echo $__env->make('layouts.partials.user_account_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </ul>
                </div>
            </nav>
        </header>