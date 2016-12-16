<?php $__env->startSection('content'); ?>
<h1>Deseja realmente excluir a partida?</h1>
<form action="<?php echo e(route('matches.destroy',$matches->id)); ?>" method="POST" class="form-group">
	<?php echo e(csrf_field()); ?>

	<?php echo e(method_field('DELETE')); ?>

	<button href="submit" class="btn btn-danger" >Confirmar</button>	
	<a href="<?php echo e(route('matches.index')); ?>" class="btn btn-primary">Cancelar</a>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>