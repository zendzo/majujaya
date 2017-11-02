<!-- /.tab-pane -->
<div class="tab-pane" id="settings">
  <form class="form-horizontal"  action="<?php echo e(route('user.profile.update',$user->id)); ?>" enctype="multipart/form-data" method="POST">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>


    <div class="form-group">
      <label for="first_name" class="col-sm-2 control-label">Nama Depan</label>

      <div class="col-sm-10">
        <input id="first_name" name="first_name" type="text" class="form-control" value="<?php echo e($user->first_name); ?>" placeholder="first name">

        <?php if($errors->has('first_name')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('first_name')); ?></strong>
            </span>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group">
      <label for="last_name" class="col-sm-2 control-label">Nama Belakang</label>

      <div class="col-sm-10">
       <input id="last_name" name="last_name" type="text" class="form-control" value="<?php echo e($user->last_name); ?>" placeholder="first name">

        <?php if($errors->has('last_name')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('last_name')); ?></strong>
            </span>
        <?php endif; ?>
      </div>
    </div>


    <div class="form-group">
      <label for="email" class="col-sm-2 control-label">Email</label>

      <div class="col-sm-10">
       <input id="email" name="email" type="text" class="form-control" value="<?php echo e($user->email); ?>" placeholder="email">

        <?php if($errors->has('email')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>
      </div>
    </div>

    <div class="form-group">
      <label for="phone" class="col-sm-2 control-label">Phone</label>

      <div class="col-sm-10">
       <input id="phone" name="phone" type="text" class="form-control" value="<?php echo e($user->phone); ?>" placeholder="phone">

        <?php if($errors->has('phone')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('phone')); ?></strong>
            </span>
        <?php endif; ?>
      </div>
    </div>

    <?php if(Auth::id() == $user->id or Auth::user()->role->name === 'Administrator'): ?>
    <div class="form-group">
      <label for="password" class="col-sm-2 control-label">password</label>

      <div class="col-sm-10">
       <input id="password" name="password" type="password" class="form-control" placeholder="password" required>

        <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>
      </div>
      
    </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-danger">Update</button>
        </div>
      </div>
    <?php endif; ?>

  </form>
</div>
<!-- /.tab-pane -->