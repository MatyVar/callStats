<?php $__env->startSection('content'); ?>

<div class="row justifi-content-center">
    <div class="col-md-8">
        <form  method="post" action="<?php echo e(route('gestion.update',['operador'=>$operador->id])); ?>">
            <?php echo csrf_field(); ?>

            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <h3>Editar registro</h3>
                <label for="nombre">Nombre del Operador</label>

                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre del operador/a..." value="<?php echo e($operador->nombre); ?>">
                
                <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <p class="text-danger">El nombre no puede tener menos de 3 caracteres, estar vacio o contender numeros ni caracteres especiales. </p>
               <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

               <div class="form-group">
                   <label for="categoria">Categoria:</label>
                   <select name="categoria" id="" class="form-control">
                       <option value="<?php echo e($operador->categoria); ?>" >Seleccione categoria...</option>
                        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option 
                        value="<?php echo e($categoria->record); ?>"
                        <?php echo e($operador->categoria == $categoria->record ? 'selected':''); ?>

                        
                        ><?php echo e($categoria->record); ?></option>                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                </select>
                <?php $__errorArgs = ['categoria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger">Debe seleccionar una categoria. </p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="supervisor">Supervisor a cargo:</label>

<input type="text" class="form-control" name="supervisor">
            <span>Lunes:</span>
           <select class="form-control" aria-label="Default select example" name="lunes" id="">
               <option class="form-control" value="07:00 a 15:00">07:00 a 15:00</option>
               <option class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
               <option  class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
               <option  class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
               <option  class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
               <option  class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
               <option  class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
               <option  class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
               <option  class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
               <option  class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
               <option  class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
               <option  class="form-control" value="FRANCO">FRANCO</option>
           </select>
           <span>Martes:</span>
           <select class="form-control" aria-label="Default select example" name="martes" id="">
            <option  value="07:00 a 15:00">07:00 a 15:00</option>
               <option  class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
               <option  class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
               <option  class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
               <option  class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
               <option  class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
               <option  class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
               <option  class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
               <option  class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
               <option  class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
               <option  class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
               <option  class="form-control" value="FRANCO">FRANCO</option>
        </select>
        <span>Miercoles:</span>
        <select class="form-control" aria-label="Default select example" name="miercoles" id="">
            <option  class="form-control" value="07:00 a 15:00">07:00 a 15:00</option>
               <option  class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
               <option  class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
               <option  class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
               <option  class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
               <option  class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
               <option  class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
               <option  class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
               <option  class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
               <option  class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
               <option  class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
               <option  class="form-control" value="FRANCO">FRANCO</option>
        </select>
        <span>Jueves:</span>
        <select class="form-control" aria-label="Default select example" name="jueves" id="">
            <option  class="form-control" value="07:00 a 15:00">07:00 a 15:00</option>
               <option  class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
               <option  class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
               <option  class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
               <option  class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
               <option  class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
               <option  class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
               <option  class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
               <option  class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
               <option  class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
               <option  class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
               <option  class="form-control" value="FRANCO">FRANCO</option>
        </select>
        <span>Viernes:</span>
        <select class="form-control" aria-label="Default select example" name="viernes" id="">
            <option  class="form-control" value="07:00 a 15:00">07:00 a 15:00</option>
            <option  class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
            <option  class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
            <option  class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
            <option  class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
            <option  class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
            <option  class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
            <option  class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
            <option  class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
            <option  class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
               <option  class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
            <option  class="form-control" value="FRANCO">FRANCO</option>
        </select>
        <span>Sabado:</span>
        <select class="form-control" aria-label="Default select example" name="sabado" id="">
            <option  class="form-control" value="07:00 a 15:00">07:00 a 15:00</option>
            <option  class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
            <option  class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
            <option  class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
            <option  class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
            <option  class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
            <option  class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
            <option  class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
            <option  class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
            <option  class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
               <option  class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
            <option  class="form-control" value="FRANCO">FRANCO</option>
        </select>
        <span>Domingo:</span>
        <select class="form-control" aria-label="Default select example" name="domingo" id="">
            <option  class="form-control" value="07:00 a 15:00">07:00 a 15:00</option>
            <option  class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
            <option  class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
            <option  class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
            <option  class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
            <option  class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
            <option  class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
            <option  class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
            <option  class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
            <option  class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
               <option  class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
            <option  class="form-control" value="FRANCO">FRANCO</option>
        </select>
             
    


               </div>
            </div>
            <div class="form-group">
                <a class="btn btn-secondary mr-2" href="<?php echo e(route('gestion.index')); ?>">Volver</a>
                <input type="submit" class="btn btn-success" value="Editar">
            </div>
        </form >
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/supervision/resources/views/gestion/edit.blade.php ENDPATH**/ ?>