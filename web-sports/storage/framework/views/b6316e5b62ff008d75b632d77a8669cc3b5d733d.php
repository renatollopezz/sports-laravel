<?php $__env->startSection('content'); ?>
<h1>Nova temporada</h1>
<div class="row">
	<div class="col-md-6">

	<div class="alert alert-danger">

	</div>
		<form action="<?php echo e(route('seasons.store')); ?>" method="POST" class="form-group">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('POST')); ?>

				 <div class="form-group">
			      <label for="">Nome:</label>
			      <input type="text" class="form-control" name="name">
			    </div>	
	
				<input type="submit" value="Confirmar" class="btn btn-success btn-md">
				<a href="<?php echo e(route('seasons.index')); ?>" class="btn btn-primary btn-md">Voltar</a>	
		</form>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>