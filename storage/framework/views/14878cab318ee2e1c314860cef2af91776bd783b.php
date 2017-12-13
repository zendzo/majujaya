<?php $__env->startSection('content'); ?>
<div class="row">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> <?php echo e(config('app.name')); ?>

            <small class="pull-right">Date: <?php echo e(Date('d/m/Y')); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          Data User :
          <address>
            <strong><?php echo e($user->fullName()); ?>.</strong><br>
            <?php echo e($user->store->alamat); ?><br>
            <?php echo e($user->store->npwp); ?><br>
            <?php echo e($user->store->keterangan); ?><br>
            <?php echo e($user->phone); ?><br>
          </address>
        </div>
        <!-- /.col -->
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
            <?php $__empty_1 = true; $__currentLoopData = $user->penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	            <table class="table table-bordered">
	            <thead style="background: #3c8dbc; text-align: center;">
			      <tr>
			        <th>Kode Nota</th>
			        <th>User</th>
			        <th>Tanggal Penjualan</th>
			        <th>Tanggal Pengiriman</th>
			        
			        
			        
			        <th>Dari Gudang</th>
			        
			        
			        <th>Total</th>
			        <th>Pembayaran</th>
			        <th>Sisa Pembayaran</th>
			        <?php if(Auth::user()->role->id == "1"): ?>
			         
			        <?php endif; ?>
			      </tr>
			      </thead>
			      <tbody>
	            	<tr>
			            <td>
			              <?php if(Auth::user()->role->id == "1"): ?>
			                <a href="<?php echo e(route('admin.proses.transaksi.penjualan',$sale->kode)); ?>"><?php echo e($sale->kode); ?></a>
			              <?php else: ?>
			                <a href="<?php echo e(route('user.proses.transaksi.penjualan',$sale->kode)); ?>"><?php echo e($sale->kode); ?></a>
			              <?php endif; ?>
			            </td>
			            <td><?php echo e($sale->user->first_name); ?></td>
			            <td><?php echo e($sale->tanggal_so->format('d/m/Y')); ?></td>
			            <td><?php echo e($sale->tanggal_kirim->format('d/m/Y')); ?></td>
			            
			            
			            
			            <td><?php echo e($sale->gudang->nama); ?></td>
			            
			            
			            <td><?php echo e($sale->sales->sum('total')); ?></td>
			            <td><?php echo e($sale->bayar); ?></td>
			            <td><?php echo e($sale->sales->sum('total') - $sale->bayar); ?></td>
			            
			            <?php if(Auth::user()->role->id == "1"): ?>
			              <?php if($sale->bayar === $sale->sales->sum('total')): ?>
			                <td>
			                	<a href="#" class="btn btn-info dissabled" style="width: 100%;">
			                  		<i class="fa fa-fw fa-check-circle-o"></i> LUNAS
			                	</a>
			            	</td>
			              <?php else: ?>
			              
			              <?php endif; ?>
			            <?php endif; ?>
			         </tr>
			        </tbody>
			    </table>
			    <table class="table table-striped">
			    	<thead>
			    		<th>Jenis Prod.</th>
			    		<th>Satuan Prod.</th>
			    		<th>Jumlah </th>
			    		<th>Harga</th>
			    		<th>Total</th>
			    	</thead>
			    	<tbody>
			    		<?php $__currentLoopData = $sale->sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    			<tr>
			    				<td>(<?php echo e($item->product->kode); ?>) - <?php echo e($item->product->nama); ?></td>
			    				<td>(<?php echo e($item->satuan->symbol); ?>) - <?php echo e($item->satuan->nama); ?></td>
			    				<td><?php echo e($item->jumlah); ?></td>
			    				<td><?php echo e($item->harga); ?></td>
			    				<td><?php echo e($item->jumlah * $item->harga); ?></td>
			    			</tr>
			    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			    	</tbody>
			    </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            	
            <?php endif; ?>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          </button>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>