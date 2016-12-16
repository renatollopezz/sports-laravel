<?php $__env->startSection('content'); ?>


<h1>Temporadas</h1>

<div class="row">
	<div class="col-md-6">
		<a class="btn btn-primary" href="<?php echo e(route('seasons.create')); ?>">Nova temporada</a>
	</div>
</div>
<table class="table container">
	<tbody>
		<tr>
			<td>Nome</td>
		</tr>
	</tbody>
<?php $__currentLoopData = $seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<tr>
		<td><?php echo e($s -> name); ?></td>
		<td>
			<a href="<?php echo e(route('seasons.show',$s->id)); ?>" class="btn btn-info">Visualizar</a>
			<a href="<?php echo e(route('seasons.edit',$s->id)); ?>" class="btn btn-warning">Editar</a>
			<a href="<?php echo e(url('seasons/delete',$s->id)); ?>" class="btn btn-danger">Excluir</a>
		</td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>