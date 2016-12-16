<?php $__env->startSection('content'); ?>
<h1>Edição da competição</h1>
<div class="row">
	<div class="col-md-6">
		<form action="<?php echo e(route('competitions.update',$competition->id)); ?>" method="POST" class="form-group">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('PUT')); ?>

				 <div class="form-group">
			      <label for="">Nome:</label>
			      <input type="text" value="<?php echo e($competition->name); ?>" class="form-control" name="name">
			    </div>

				 <div class="form-group">
			      <label for="">Data inicial:</label>
			      <input type="date" value="<?php echo e(date('d/m/Y',strtotime($competition->initial_date))); ?>" name="initial_date" class="form-control">
			    </div>

				 <div class="form-group">
			      <label for="">Data final:</label>
			      <input type="date" value="<?php echo e(date('d/m/Y',strtotime($competition->final_date))); ?>" name="final_date" class="form-control">
			    </div>

			<h3>Times participantes</h3>
			    <div class="form-group">
			    	<table class="table container">
			    		<tbody>
			    				<tr>
			    					<td>Nome
			    					<td></td>
			    				</tr>
			    		</tbody>
			    
			    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			    		<tr>
			    			<td><?php echo e($team->name); ?></td>
			    			<?php if(count($competition->teams->where('id',$team->id)) > 0): ?>
			    				<td><input  type="checkbox" value="<?php echo e($team->id); ?>" checked="true" name="check[]"></td>
			    			<?php else: ?>
			    			    <td><input  type="checkbox" value="<?php echo e($team->id); ?>"  name="check[]"></td>
			    			 <?php endif; ?>
			    		</tr>
			    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			    	</table>
			    </div>
		<div class="form-group">
			<h3>Temporada</h3>
			<select class="form-control" name="season_id" id="competition-season">
				 <?php $__currentLoopData = $seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<option value="<?php echo e($season->id); ?>"><?php echo e($season->name); ?></option>
				 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</select>
		</div>
				<input type="submit" value="Confirmar" class="btn btn-success btn-md">
				<a href="<?php echo e(route('competitions.index')); ?>" class="btn btn-primary btn-md">Voltar</a>
			</div>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>