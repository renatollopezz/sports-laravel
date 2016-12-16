<?php $__env->startSection('content'); ?>


<div class="jumbotron">
  <h1>Detalhes do time</h3>
 <h3>Time: <?php echo e($team->name); ?></h3>
 <h3>Abreviação:<?php echo e($team->abreviation); ?></h3>

  <p><a class="btn btn-primary btn-lg" href="<?php echo e(route('teams.index')); ?>" role="button">Voltar
  </a></p>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>