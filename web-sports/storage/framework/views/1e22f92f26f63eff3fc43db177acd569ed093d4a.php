<?php $__env->startSection('content'); ?>
<h1>Edição da competição</h1>
<div class="row">
	<div class="col-md-6">
		<form action="<?php echo e(route('competitions.update',$competition->id)); ?>" method="POST" class="form-group">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('PUT')); ?>

				 <div class="form-group">
			      <label for="">Nome:</label>
			      <input type="text" value="<?php echo e($competition->name); ?>" class="form-control" name="name">
			    </div>

				 <div class="form-group">
			      <label for="">Data inicial:</label>
			      <input type="date" value="<?php echo e(date('d/m/Y',strtotime($competition->initial_date))); ?>" name="initial_date" class="form-control">
			    </div>

				 <div class="form-group">
			      <label for="">Data final:</label>
			      <input type="date" value="<?php echo e(date('d/m/Y',strtotime($competition->final_date))); ?>" name="final_date" class="form-control">
			    </div>		
				<input type="submit" value="Confirmar" class="btn btn-success btn-md">
				<a href="<?php echo e(route('matches.index')); ?>" class="btn btn-primary btn-md">Voltar</a>
			</div>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>