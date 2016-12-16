<?php $__env->startSection('content'); ?>

<div class="jumbotron">
  <h1>Detalhes da competição</h3>
<h3>Nome: 
	<p><h4><?php echo e($competition->name); ?></h4></p>
</h1>

<h3>Data inicial:
	<h4><?php echo e($competition->initial_date); ?></h4>
</h3>

<h3>Data final:
	<h4><?php echo e($competition->final_date); ?></h4>
</h3>
  <p><a class="btn btn-primary btn-lg" href="<?php echo e(route('competitions.index')); ?>" role="button">Voltar</a></p>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>