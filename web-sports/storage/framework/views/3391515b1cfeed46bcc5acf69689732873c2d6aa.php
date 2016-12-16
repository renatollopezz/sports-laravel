<?php $__env->startSection('content'); ?>

<h1>Edição do time</h1>
<form action="<?php echo e(route('teams.update',$team->id)); ?>" method="POST">
	<?php echo e(csrf_field()); ?>

	<?php echo e(method_field('PUT')); ?>

<div class="form-group">
	<label for="team-name">Nome: </label>
	<input class="form-control" value="<?php echo e($team->name); ?>"type="text" name="name" id="team-name">
</div>
<div class="form-group">

	<label for="team-abreviation">Escudo: </label>
	<input class="form-control" value="<?php echo e($team->abreviation); ?>" type="text" name="abreviation" id="team-abreviation">
</div>
	<button class="btn btn-md btn-success" type="submit">Salvar</button>
	<a href="<?php echo e(route('matches.index')); ?>" class="btn btn-primary btn-md">Voltar</a>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>