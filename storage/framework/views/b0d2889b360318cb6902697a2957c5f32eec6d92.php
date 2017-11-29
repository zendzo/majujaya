  <!-- /.tab-pane -->
<div class="tab-pane" id="store">
<?php if(!empty($user->store)): ?>
<form class="form-horizontal"  action="<?php echo e(route('user.store.update',$user->store->id)); ?>" method="POST">
              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('PATCH')); ?>


              <div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
                <label for="nama" class="col-sm-2 control-label">Nama </label>

                <div class="col-sm-10">
                  <input id="nama" name="nama" type="text" class="form-control" placeholder="Name" value="<?php echo e($user->store->nama); ?>" required>

                  <?php if($errors->has('nama')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('nama')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>">
                <label for="alamat" class="col-sm-2 control-label">Alamat </label>

                <div class="col-sm-10">
                  <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Alamat" value="<?php echo e($user->store->alamat); ?>" required>

                  <?php if($errors->has('alamat')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('alamat')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('npwp') ? ' has-error' : ''); ?>">
                <label for="npwp" class="col-sm-2 control-label">NPWP</label>

                <div class="col-sm-10">
                  <input id="npwp" name="npwp" type="text" class="form-control" placeholder="NPWP" value="<?php echo e($user->store->npwp); ?>" required>

                  <?php if($errors->has('npwp')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('npwp')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('status') ? ' has-error' : ''); ?>">
                <label for="status" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-10">
                  <select class="form-control" name="status" id="status">
                    <option value="1">Aktif</option>
                    <option value="0">Inaktif</option>
                  </select>

                  <?php if($errors->has('status')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('status')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('keterangan') ? ' has-error' : ''); ?>">
                <label for="status" class="col-sm-2 control-label">Keterangan</label>

                <div class="col-sm-10">
                  <input id="keterangan" name="keterangan" type="text" class="form-control" placeholder="Keterangan" value="<?php echo e($user->store->keterangan); ?>" required>
                  <input name="user_id" type="text" hidden value="<?php echo e($user->store->user_id); ?>">

                  <?php if($errors->has('keterangan')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('keterangan')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <?php if(Auth::id() === $user->store->user_id or Auth::user()->role_id === 1): ?>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Save</button>
                  </div>
                </div>
              <?php endif; ?>
</form>
<?php else: ?>
<form class="form-horizontal"  action="<?php echo e(route('user.store.store')); ?>" method="POST">
<?php echo e(csrf_field()); ?>


<div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
  <label for="nama" class="col-sm-2 control-label">Nama </label>

  <div class="col-sm-10">
    <input id="nama" name="nama" type="text" class="form-control" placeholder="Name" required>

    <?php if($errors->has('nama')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('nama')); ?></strong>
        </span>
    <?php endif; ?>
  </div>
</div>

<div class="form-group<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>">
  <label for="alamat" class="col-sm-2 control-label">Alamat </label>

  <div class="col-sm-10">
    <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Alamat" required>

    <?php if($errors->has('alamat')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('alamat')); ?></strong>
        </span>
    <?php endif; ?>
  </div>
</div>

<div class="form-group<?php echo e($errors->has('npwp') ? ' has-error' : ''); ?>">
  <label for="npwp" class="col-sm-2 control-label">NPWP</label>

  <div class="col-sm-10">
    <input id="npwp" name="npwp" type="text" class="form-control" placeholder="NPWP" required>

    <?php if($errors->has('npwp')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('npwp')); ?></strong>
        </span>
    <?php endif; ?>
  </div>
</div>

<div class="form-group<?php echo e($errors->has('status') ? ' has-error' : ''); ?>">
  <label for="status" class="col-sm-2 control-label">Status</label>

  <div class="col-sm-10">
    <select class="form-control" name="status" id="status">
      <option value="1">Aktif</option>
      <option value="0">Inaktif</option>
    </select>

    <?php if($errors->has('status')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('status')); ?></strong>
        </span>
    <?php endif; ?>
  </div>
</div>

<div class="form-group<?php echo e($errors->has('keterangan') ? ' has-error' : ''); ?>">
  <label for="status" class="col-sm-2 control-label">Keterangan</label>

  <div class="col-sm-10">
    <input id="keterangan" name="keterangan" type="text" class="form-control" placeholder="Keterangan" required>
    <input name="user_id" type="text" hidden value="<?php echo e(Auth::id()); ?>">

    <?php if($errors->has('keterangan')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('keterangan')); ?></strong>
        </span>
    <?php endif; ?>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Save</button>
  </div>
</div>
</form>
<?php endif; ?>
</div>
<!-- /.tab-pane -->