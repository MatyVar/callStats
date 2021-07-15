<?php $__env->startSection('content'); ?>
<h4><b>Notas entre el <?php echo e($fechaInicio); ?> y <?php echo e($fechaFin); ?></b></h4>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">TIPO</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">FECHA DE REGISTRO</th>
            <th scope="col">CONTENIDO</th>
            <th scope="col">ESTADO</th>
            <th scope="col">FINALIZO VIGENCIA</th>
            
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $resultadosNotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resultado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!--
<div class="card">
  <div class="card-header">
 <?php echo e($resultado->fecha); ?>

  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?php echo e($resultado->nota); ?></p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
-->

        <?php if($resultado->vigencia =='si'): ?>

        <tr>
            <th style="background-color: #ffe4e4;" scope="row"><?php echo e($resultado->titulo); ?></th>
            <td style="background-color: #ffe4e4;"><?php echo e($resultado->nombre); ?></td>
           <?php if($resultado->titulo == 'Ausencias'): ?>
           <td style="background-color: #ffe4e4;"><?php echo e($resultado->fechaAusencia); ?> (Fecha de la ausencia)</td>
          <?php else: ?>
          <td style="background-color: #ffe4e4;"><?php echo e($resultado->fecha); ?></td>
           <?php endif; ?>
            <td style="background-color: #ffe4e4;"><?php echo e($resultado->nota); ?></td>
            <td style="background-color: #ffe4e4;">VIGENTE</td>
            <td style="background-color: #ffe4e4;"><i>aun vigente</i></td>
            
            
        </tr>
        <?php else: ?>
        <tr>
            <th style="background-color: #beffac;" scope="row"><?php echo e($resultado->titulo); ?></th>
            <td style="background-color: #beffac;"><?php echo e($resultado->nombre); ?></td>
            <td style="background-color: #beffac;"><?php echo e($resultado->fecha); ?></td>
            <td style="background-color: #beffac;"><?php echo e($resultado->nota); ?></td>
            <td style="background-color: #beffac;">NO VIGENTE</td>
            <td style="background-color: #beffac;"><b><?php echo e($resultado->finVigencia); ?></b> - <?php echo e($resultado->descripcionFin); ?></td>
            
        </tr>
        <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<a class="btn btn-warning mr-2 text-white" href="<?php echo e(route('gestion.index')); ?>">Volver</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/proyectos/sonda/resources/views/gestion/respuestaNotas.blade.php ENDPATH**/ ?>