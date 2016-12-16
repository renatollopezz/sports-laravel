<?php $__env->startSection('content'); ?>
<h1>Nova partida</h1>
<div class="row">
	<div class="col-md-6">
		<form action="<?php echo e(route('matches.store')); ?>" method="POST" class="form-group">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('POST')); ?>

				 <div class="form-group">
			      <label for="">Data da partida:</label>
			      <input type="date" class="form-control" name="dt_match">
			    </div>

				 <div class="form-group">
			      <label for="">Casa:</label>
			      <input type="number" name="nb_home_score" class="form-control">
			    </div>

				 <div class="form-group">
			      <label for="">Fora:</label>
			      <input type="number" name="nb_away_score" class="form-control">
			    </div>
				 
				 <div class="form-group">
			      <label for="">Time casa:</label>
			      	<select name="id_home" class="form-control">
						<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<option value="<?php echo e($team->id); ?>"> <?php echo e($team->name); ?></option>		
						 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>	
		    		</select>
			    </div>

			    <div class="form-group">
			      <label for="">Time visitante:</label>
					<select  name="id_away" class="form-control">
						<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<option value="<?php echo e($team->id); ?>"> <?php echo e($team->name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
					</select>
			    </div>			
			
					<input type="submit" value="Confirmar" class="btn btn-success btn-md">
					<a href="<?php echo e(route('matches.index')); ?>" class="btn btn-primary btn-md">Voltar</a>
			</div>

		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>