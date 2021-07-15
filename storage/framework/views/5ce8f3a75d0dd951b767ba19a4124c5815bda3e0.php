<?php $__env->startSection('content'); ?>

<table class="table table-bordered table-sm " >
    <thead class="bg-dark text-white">
      <tr>  
            <th scope="col">AGENTE</th>
            <th scope="col">SUPERVISOR</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">TIEMPO TRABAJADO</th>
            <th scope="col">ATENDIDAS TOTALES</th>
            <th scope="col">ATENDIDAS ENTRANTES</th>
            <th scope="col">ATENDIDAS SALIENTES</th>
            <th scope="col">CANTIDAD (acw)</th>
            <th scope="col">TIEMPO (acw)</th>
            <th scope="col">ACW POR LLAMADA</th>
            <th scope="col">TALKTIME TOTAL</th>
            <th scope="col">TALKTIME POR LLAMADA</th>
            <th scope="col">HOLDTIME TOTAL</th>
            <th scope="col">HOLDTIME POR LLAMADA</th>            
            <th scope="col">TIEMPO (almuerzo)</th>
            <th scope="col">TIEMPO (backoffice)</th>
            <th scope="col">TIEMPO (reunion)</th>
            <th scope="col">TMO</th>
            <th scope="col">TMO POR LLAMADA</th>
            <th scope="col">AVAIL</th>
            <th scope="col">AVAIL EN %</th>
            <th scope="col">OCUPPANCY</th>
           
      </tr>
    </thead>
    <tbody>
     
   
<?php if(count($registros)>0): ?>
<?php $fechaAux=$registros[0]->fecha; ?>
<span class="badge badge-warning"><?php echo e($fechaAux); ?></span>
<?php endif; ?>


<?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php if($fechaAux==$registro->fecha): ?>

<tr>

   <td><?php echo e($registro->AGENTE); ?></td>
   <td><?php echo e($registro->SUPERVISOR); ?></td>
   <td><?php echo e($registro->CATEGORIA); ?></td>
   <td><?php echo e($registro->TIEMPO_TRABAJADO); ?></td>
   <td><?php echo e($registro->ATENDIDAS_TOTALES); ?></td>
   <td><?php echo e($registro->ATENDIDAS_ENTRANTES); ?></td>
   <td><?php echo e($registro->ATENDIDAS_SALIENTES); ?></td>
   <td><?php echo e($registro->CANTIDAD_acw); ?></td>
   <td><?php echo e($registro->TIEMPO_acw); ?></td>
   <td><?php echo e($registro->ACW_POR_LLAMADA); ?></td>
   <td><?php echo e($registro->TALKTIME_TOTAL); ?></td>
   <td><?php echo e($registro->TALKTIME_POR_LLAMADA); ?></td>
   <td><?php echo e($registro->HOLDTIME_TOTAL); ?></td>
   <td><?php echo e($registro->HOLDTIME_POR_LLAMADA); ?></td>   
   <td><?php echo e($registro->TIEMPO_almuerzo); ?></td>
   <td><?php echo e($registro->TIEMPO_backoffice); ?></td>
   <td><?php echo e($registro->TIEMPO_reunion); ?></td>
   <td><?php echo e($registro->TMO); ?></td>
   <td><?php echo e($registro->TMO_POR_LLAMADA); ?></td>
   <td><?php echo e($registro->AVAIL); ?></td>
   <td><?php echo e($registro->AVAIL_EN_PORCENTAJE); ?></td>
   
   <td><?php echo e($registro->OCUPPANCY); ?></td>
  
  </tr>


<?php else: ?>

</tbody>
</table>

<span class="badge badge-warning"><?php echo e($fechaAux=$registro->fecha); ?></span>
<table class="table table-bordered table-sm">
    <thead class="bg-dark text-white">
      <tr>
        <th scope="col">AGENTE</th>
        <th scope="col">SUPERVISOR</th>
        <th scope="col">CATEGORIA</th>
        <th scope="col">TIEMPO TRABAJADO</th>
        <th scope="col">ATENDIDAS TOTALES</th>
        <th scope="col">ATENDIDAS ENTRANTES</th>
        <th scope="col">ATENDIDAS SALIENTES</th>
        <th scope="col">CANTIDAD (acw)</th>
        <th scope="col">TIEMPO (acw)</th>
        <th scope="col">ACW POR LLAMADA</th>
        <th scope="col">TALKTIME TOTAL</th>
        <th scope="col">TALKTIME POR LLAMADA</th>
        <th scope="col">HOLDTIME TOTAL</th>
        <th scope="col">HOLDTIME POR LLAMADA</th>        
        <th scope="col">TIEMPO (almuerzo)</th>
        <th scope="col">TIEMPO (backoffice)</th>
        <th scope="col">TIEMPO (reunion)</th>
        <th scope="col">TMO</th>
        <th scope="col">TMO POR LLAMADA</th>
        <th scope="col">AVAIL</th>
        <th scope="col">AVAIL EN %</th>
        <th scope="col">OCUPPANCY</th>
           
      </tr>
    </thead>
    <tbody>
        <tr>
            
            <td><?php echo e($registro->AGENTE); ?></td>
            <td><?php echo e($registro->SUPERVISOR); ?></td>
            <td><?php echo e($registro->CATEGORIA); ?></td>
            <td><?php echo e($registro->TIEMPO_TRABAJADO); ?></td>
            <td><?php echo e($registro->ATENDIDAS_TOTALES); ?></td>
            <td><?php echo e($registro->ATENDIDAS_ENTRANTES); ?></td>
            <td><?php echo e($registro->ATENDIDAS_SALIENTES); ?></td>
            <td><?php echo e($registro->CANTIDAD_acw); ?></td>
            <td><?php echo e($registro->TIEMPO_acw); ?></td>
            <td><?php echo e($registro->ACW_POR_LLAMADA); ?></td>
            <td><?php echo e($registro->TALKTIME_TOTAL); ?></td>
            <td><?php echo e($registro->TALKTIME_POR_LLAMADA); ?></td>
            <td><?php echo e($registro->HOLDTIME_TOTAL); ?></td>
            <td><?php echo e($registro->HOLDTIME_POR_LLAMADA); ?></td>            
            <td><?php echo e($registro->TIEMPO_almuerzo); ?></td>
            <td><?php echo e($registro->TIEMPO_backoffice); ?></td>
            <td><?php echo e($registro->TIEMPO_reunion); ?></td>
            <td><?php echo e($registro->TMO); ?></td>
            <td><?php echo e($registro->TMO_POR_LLAMADA); ?></td>
            <td><?php echo e($registro->AVAIL); ?></td>
            <td><?php echo e($registro->AVAIL_EN_PORCENTAJE); ?></td>
            <td><?php echo e($registro->OCUPPANCY); ?></td>
          
           
           
          </tr>
<?php endif; ?>






    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<a class="btn btn-warning mr-2 text-white" href="<?php echo e(route('gestion.reportes')); ?>">Volver</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/proyectos/sonda/resources/views/gestion/statsRange.blade.php ENDPATH**/ ?>