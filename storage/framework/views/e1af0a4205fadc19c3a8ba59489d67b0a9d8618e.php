



<?php $__env->startSection('content'); ?>
<h4 class="text-secondary"><i><?php echo e($operador->nombre); ?></i></h4>
<h3>Compensacion de feriado:</h3>
<form action="<?php echo e(route('gestion.compensar')); ?>" method="POST">
  <?php echo method_field('POST'); ?>
<?php echo csrf_field(); ?>
<select class="form-control" name="diaCompensatorio" id="" required>
   
    <?php $__currentLoopData = $fechas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fecha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option class="form-control" value="<?php echo e($fecha); ?>"><?php echo e($fecha); ?></option>   
      
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</select>
<h3 class="mt-2">El dia:</h3>
<input class="form-control" type="date" name="compensaDia" required>
<input type="text" value="<?php echo e($operador->nombre); ?>" hidden name="operadorNombre">
<a class="btn btn-secondary mr-2 mt-5" href="<?php echo e(route('gestion.index')); ?>">Volver</a>
<button class="btn btn-success mr-2 mt-5" type="submit">Guardar</button>
</form>
<?php $__env->stopSection(); ?>

<!--aca se realiza la llamada a una accion mediante una ruta por post, y -->


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\supervision\resources\views/gestion/acciones.blade.php ENDPATH**/ ?>