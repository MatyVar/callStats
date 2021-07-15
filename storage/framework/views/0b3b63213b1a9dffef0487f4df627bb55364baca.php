<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $query; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card bg-gradient-dark ">

    <div class="card-header">
        <b>Fecha: </b><?php echo e($datos->fecha); ?><br>
        <b>Empleado: </b><?php echo e($datos->nombre); ?>

    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <b>Detalle de supervision:</b>
            <p><?php echo e($datos->nota); ?></p>

        </blockquote>
    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- falta toda esta parte. -->
<form action="<?php echo e(route('gestion.finalizarNotaConDetalle')); ?>"  class="form-group">
<?php echo csrf_field(); ?>
    <h5 class="mt-2"><b>Descripcion de la finalizacion:</b></h5>
    <input type="number" name="id" hidden value="<?php echo e($id); ?>">
    <textarea class="form-control" name="descripcion" id="" cols="30" rows="10">
    

</textarea>
    <button class="btn btn-success" type="submit">Guardar </button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/proyectos/sonda/resources/views/gestion/finalizarNota.blade.php ENDPATH**/ ?>