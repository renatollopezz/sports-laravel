<?php $__env->startSection('content'); ?>
<h1>Times</h1>

<div class="row">
	<div class="col-md-6">
		<a class="btn btn-primary" href="<?php echo e(route('teams.create')); ?>">Novo time</a>
	</div>
</div>
<table class="table container">
	<tbody>
		<tr>
			<td>Nome</td>
			<td>Opções</td>

		</tr>
	</tbody>
<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<tr>
		<td><?php echo e($team -> name); ?></td>
		<td>
			<a href="<?php echo e(route('teams.show',$team->id)); ?>" class="btn btn-info">Visualizar</a>
			<a href="<?php echo e(route('teams.edit',$team->id)); ?>" class="btn btn-warning">Editar</a>
			<a href="<?php echo e(url('/teams/delete',$team->id)); ?>" class="btn btn-danger">Excluir</a>
		</td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>