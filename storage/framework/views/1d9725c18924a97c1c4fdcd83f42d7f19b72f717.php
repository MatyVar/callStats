


<?php $__env->startSection('content'); ?>

<h4>Diario simple:</h4>
<form action="<?php echo e(route('gestion.consultarStats')); ?>" method="post" class="form-group">
<?php echo csrf_field(); ?>

<p>En esta seccion seleccionando un dia, se creará el informe principal:</p>
<input name="fecha" class="form-control" type="date"></input>



<button class="btn btn-success mt-2 form-control" type="submit">Crear</button>

</form>

<hr>

<h4>Ver diario Para planilla diaria:</h4>
<form action="<?php echo e(route('gestion.consultarStatsRange')); ?>" method="post"  class="form-group">
    <?php echo csrf_field(); ?>
    
    <p>Seleccionar por rango:</p>

    Inicio: <input name="inicio" class="form-control" type="date"></input>
    
    Fin: <input name="fin" class="form-control" type="date"></input>
    
    <button class="btn btn-primary mt-2 form-control" type="submit">Consultar</button>
    
    </form>

    <h4>Ver diario para planilla general:</h4>
<form action="<?php echo e(route('gestion.consultarStatsRangeVPlan')); ?>" method="post"  class="form-group">
    <?php echo csrf_field(); ?>
    
    <p>Seleccionar por rango:</p>

    Inicio: <input name="inicio" class="form-control" type="date"></input>
    
    Fin: <input name="fin" class="form-control" type="date"></input>
    
    <button class="btn btn-warning mt-2 form-control text-white" type="submit">Consultar</button>
    
    </form>
    <a class="btn btn-warning mr-2 text-white" href="<?php echo e(route('gestion.index')); ?>">Volver</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callStats\resources\views/gestion/reportes.blade.php ENDPATH**/ ?>