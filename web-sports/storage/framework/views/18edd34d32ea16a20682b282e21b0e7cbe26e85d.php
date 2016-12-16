<?php $__env->startSection('content'); ?>
	<h1>Deseja excluir o registro?</h1>
<form action="<?php echo e(route('competitions.destroy',$competition->id)); ?>" method="POST">
	<?php echo e(csrf_field()); ?>

	<?php echo e(method_field('DELETE')); ?>

	<h1>Campeonato: <?php echo e($competition->name); ?></h1>
	<button type="submit" class="btn btn-danger btn-md">Confirmar</button>
	<a class="btn btn-primary btn-md" href="<?php echo e(route('competitions.index')); ?>">Voltar</a>
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>