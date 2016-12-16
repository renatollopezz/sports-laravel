<?php $__env->startSection('content'); ?>


<h1>Competições</h1>

<div class="row">
	<div class="col-md-6">
		<a class="btn btn-primary" href="<?php echo e(route('competitions.create')); ?>">Nova competiçao</a>
	</div>
</div>
<table class="table container">
	<tbody>
		<tr>
			<td>Nome</td>
			<td>Inicio</td>
			<td>Término</td>
			<td>Opções</td>
		</tr>
	</tbody>
<?php $__currentLoopData = $competitions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cpt): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<tr>
		<td><?php echo e($cpt -> name); ?></td>
		<td><?php echo e($cpt -> initial_date); ?></td>
		<td><?php echo e($cpt-> final_date); ?></td>
		<td>
			<a href="<?php echo e(route('competitions.show',$cpt->id)); ?>" class="btn btn-info">Visualizar</a>
			<a href="<?php echo e(route('competitions.edit',$cpt->id)); ?>" class="btn btn-warning">Editar</a>
			<a href="<?php echo e(url('competitions/delete',$cpt->id)); ?>" class="btn btn-danger">Excluir</a>
		</td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>