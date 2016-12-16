<?php $__env->startSection('content'); ?>
<h1>Deseja excluir ?</h1>

<form action="<?php echo e(route('teams.destroy',$team->id)); ?>" method="POST">
	<?php echo e(csrf_field()); ?>

	<?php echo e(method_field('DELETE')); ?>

	<button type="submit" class="btn btn-danger">Confirmar</button>
	<a class="btn btn-default" href="<?php echo e(route('teams.index')); ?>">Cancelar</a>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>