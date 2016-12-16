<?php $__env->startSection('content'); ?>
<h1>Novo Time</h1>

<form action="<?php echo e(route('teams.store')); ?>" method="POST">
	<?php echo e(csrf_field()); ?>

		<?php echo e(method_field('POST')); ?>

<div class="form-group">
		<label for="team-name">Nome: </label>
		<input class="form-control" type="text" name="name" id="team-name">
</div>

<div class="form-group">
		<label for="team-abreviation">Escudo: </label>
		<input class="form-control" type="text" name="abreviation" id="team-abreviation">
</div>

<div class="row">
	<div class="col-md-3">
		<button class="btn btn-success btn-md" type="submit">Salvar</button>
		<a href="<?php echo e(route('teams.index')); ?>" class="btn btn-primary btn-md">Voltar</a>

	</div>
</div>
</form>
<?php $__env->stopSection(); ?>
<span class="glyphicons glyphicons-soccer-ball"></span>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>