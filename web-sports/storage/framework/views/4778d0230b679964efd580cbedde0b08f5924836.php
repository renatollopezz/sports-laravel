<?php $__env->startSection('content'); ?>

<h1>Partidas</h1>
<div class="row">
	<div class="col-md-6">
		<a href="<?php echo e(route('matches.create')); ?>" type="button" class="btn btn-primary btn-md">Nova partida</a>
	</div>
</div>

<table class="table container">

<tbody>
		<tr>
			<td>Time casa</td>
			<td>Time fora</td>
			<td>Status jogo</td>
			<td>Data</td>
			<td>Opções</td>

		</tr>
</tbody>
<?php $__currentLoopData = $matches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $match): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<tr>
		<td><?php echo e($match->home->name); ?></td>
		<td><?php echo e($match->away->name); ?></td>
		<td><?php echo e($match->cs_status); ?></td>
		<td><?php echo e(date('d/m/Y',strtotime($match->dt_match))); ?></td>
			
		<td>
			<a href="<?php echo e(route('matches.show',$match->id)); ?>" class="btn btn-info">Visualizar</a>
			<a href="<?php echo e(route('matches.edit',$match->id)); ?>" class="btn btn-warning">Editar</a>
			<a href="<?php echo e(url('matches/delete',$match->id)); ?>" class="btn btn-danger">Excluir</a>
		</td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>