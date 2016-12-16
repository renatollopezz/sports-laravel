<?php $__env->startSection('content'); ?>

<div class="jumbotron">
  <h1>Detalhes da Temporada</h3>
<h3>Nome: 
	<p><h4><?php echo e($season->name); ?></h4></p>
</h1>
  <p><a class="btn btn-primary btn-lg" href="<?php echo e(route('seasons.index')); ?>" role="button">Voltar</a></p>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>