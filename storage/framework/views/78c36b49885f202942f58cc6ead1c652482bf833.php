

<?php $__env->startSection('content'); ?>
<!-- dato es un array que trae los cambios de la db. historico de cambios-->
<h4>Historico de cambios <span class="text-danger"><?php echo e($historialCambios[0]->empleado); ?></span></h4>


<table class="table table-bordered">
  <thead class="">
    <tr>
      
      <th scope="col">Fecha modificacion </th>
      <th scope="col">Lunes</th>
      <th scope="col">Martes</th>
      <th scope="col">Miercoles</th>
      <th scope="col">Jueves</th>
      <th scope="col">Viernes</th>
      <th scope="col">Sabado</th>
      <th scope="col">Domingo</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $historialCambios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><span class="badge badge-success"><?php echo e($historial->fecha); ?></span></td>
      <td><?php echo e($historial->lunes); ?><br><span class="badge badge-secondary"><?php echo e($historial->tareas_lunes); ?></span></td>
      <td><?php echo e($historial->martes); ?><br><span class="badge badge-secondary"><?php echo e($historial->tareas_martes); ?></span></td>
      <td><?php echo e($historial->miercoles); ?><br><span class="badge badge-secondary"><?php echo e($historial->tareas_miercoles); ?></span></td>
      <td><?php echo e($historial->jueves); ?><br><span class="badge badge-secondary"><?php echo e($historial->tareas_jueves); ?></span></td>
      <td><?php echo e($historial->viernes); ?><br><span class="badge badge-secondary"><?php echo e($historial->tareas_viernes); ?></span></td>
      <td><?php echo e($historial->sabado); ?><br><span class="badge badge-secondary"><?php echo e($historial->tareas_sabado); ?></span></td>
      <td><?php echo e($historial->domingo); ?><br><span class="badge badge-secondary"><?php echo e($historial->tareas_domingo); ?></span></td>
    </tr>
  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


   
  </tbody>
</table>
<a class="btn btn-warning mr-2 text-white" href="<?php echo e(route('gestion.index')); ?>">Volver</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/proyectos/sonda/resources/views/gestion/historico.blade.php ENDPATH**/ ?>