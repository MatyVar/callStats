<?php $__env->startSection('content'); ?>

<div class="row justifi-content-center mt-5">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\supervision\resources\views/gestion/edit.blade.php ENDPATH**/ ?>