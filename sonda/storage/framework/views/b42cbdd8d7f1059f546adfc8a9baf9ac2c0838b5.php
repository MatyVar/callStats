


<?php $__env->startSection('content'); ?>

        <h4>Agregar operador:</h4>
        <form  method="post" action="<?php echo e(route('gestion.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="legajo">Legajo</label>

                <input type="text" name="legajo" class="form-control" id="nombre" placeholder="legajo...">
                
                <label for="nombre">Nombre del Operador</label>

                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre del operador/a...">
                
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
                       <option value="" >Seleccione categoria...</option>
                        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option 
                        value="<?php echo e($categoria->record); ?>"
                        <?php echo e(old('categoria') == $categoria->record ? 'selected':''); ?>

                        
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
               </div>
            </div>
          
                   <h4>Lunes:</h4>
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
               <option  class="form-control" value="FRANCO">FRANCO</option>
           </select>
           <h4>Martes:</h4>
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
               <option  class="form-control" value="FRANCO">FRANCO</option>
        </select>
        <h4>Miercoles:</h4>
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
               <option  class="form-control" value="FRANCO">FRANCO</option>
        </select>
        <h4>Jueves:</h4>
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
               <option  class="form-control" value="FRANCO">FRANCO</option>
        </select>
        <h4>Viernes:</h4>
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
            <option  class="form-control" value="FRANCO">FRANCO</option>
        </select>
        <h4>Sabado:</h4>
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
            <option  class="form-control" value="FRANCO">FRANCO</option>
        </select>
        <h4>Domingo:</h4>
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
            <option  class="form-control" value="FRANCO">FRANCO</option>
        </select>
             


            <div class="form-group">
                <a class="btn btn-secondary mr-2 mt-3" href="<?php echo e(route('gestion.index')); ?>">Volver</a>
                <input type="submit" class="btn btn-success  mt-3" value="Agregar Operador">
               


            </div>
        </form >


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\supervision\resources\views/gestion/create.blade.php ENDPATH**/ ?>