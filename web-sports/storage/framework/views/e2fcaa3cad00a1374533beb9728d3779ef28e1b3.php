<?php $__env->startSection('content'); ?>

<div class="jumbotron">
  <h1>Detalhes da partida</h3>
<h3>Data do jogo: 
	<p><h4><?php echo e($matches->dt_match); ?></h4></p>
</h1>

<h3>Placar do Jogo:
	<h4><?php echo e($matches->home->name); ?> <?php echo e($matches->nb_home_score); ?>  X <?php echo e($matches->nb_away_score); ?> <?php echo e($matches->away->name); ?> </h4>
</h3>
  <p><a class="btn btn-primary btn-lg" href="<?php echo e(route('matches.index')); ?>" role="button">Voltar</a></p>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>