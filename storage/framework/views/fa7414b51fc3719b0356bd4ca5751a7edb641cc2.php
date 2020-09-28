<?php $__env->startSection('jsPlugins'); ?>
<script>
  function printPage() {
      var css = '@page  { size: landscape; }',
      head = document.head || document.getElementsByTagName('head')[0],
      style = document.createElement('style');

      style.type = 'text/css';
      style.media = 'print';

      if (style.styleSheet){
        style.styleSheet.cssText = css;
      } else {
        style.appendChild(document.createTextNode(css));
      }

      head.appendChild(style);
    window.print();
  }
</script>
<?php $__env->stopSection(); ?>

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
          Data Supplier :
          <address>
            <strong><?php echo e($supplier->nama); ?>.</strong><br>
            <?php echo e($supplier->alamat); ?><br>
            <?php echo e($supplier->npwp); ?><br>
            <?php echo e($supplier->keterangan); ?><br>
            <?php echo e($supplier->phone); ?><br>
          </address>
        </div>
        <!-- /.col -->
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
            <?php $__empty_1 = true; $__currentLoopData = $supplier->pembelians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	            <table class="table table-bordered">
	            <thead style="background: #3c8dbc; text-align: center;">
			      <tr>
			        <th>Kode Nota</th>
			        <th>Supplier</th>
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
			                <a href="<?php echo e(route('admin.proses.transaksi.pembelian',$order->kode)); ?>"><?php echo e($order->kode); ?></a>
			              <?php else: ?>
			                <a href="<?php echo e(route('user.proses.transaksi.pembelian',$order->kode)); ?>"><?php echo e($order->kode); ?></a>
			              <?php endif; ?>
			            </td>
			            <td><?php echo e($order->supplier->nama); ?></td>
			            <td><?php echo e($order->tanggal_po->format('d/m/Y')); ?></td>
			            <td><?php echo e($order->tanggal_kirim->format('d/m/Y')); ?></td>
			            
			            
			            
			            <td><?php echo e($order->gudang->nama); ?></td>
			            
			            
			            <td><?php echo e($order->orders->sum('total')); ?></td>
			            <td><?php echo e($order->bayar); ?></td>
			            <td><?php echo e($order->orders->sum('total') - $order->bayar); ?></td>
			            
			            <?php if(Auth::user()->role->id == "1"): ?>
			              <?php if($order->bayar === $order->orders->sum('total')): ?>
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
			    		<?php $__currentLoopData = $order->orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
  </div>	
      <!-- /.row -->
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
        	<button onclick="printPage()" href="#" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
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