<?php $__env->startSection('content'); ?>

<div class="row justifi-content-center">
    <div class="col-md-8">
        <form  method="post" action="<?php echo e(route('gestion.update',['operador'=>$operador->id])); ?>">
            <?php echo csrf_field(); ?>

            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <h3>Editar registro</h3>
                <label class="font-weight-bold" for="nombre">Nombre del Operador</label>

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
                   <label class="font-weight-bold" for="categoria">Categoria:</label>
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
            <label class="font-weight-bold" for="supervisor">Supervisor:</label>
            <select name="supervisor" id="supervisor" class="select form-control" >
                <option value="#">Seleccionar...</option>
                <option value="Matias Gasañol">Matias Gasañol</option>
                <option value="Patricia Perez">Patricia Perez</option>
                <option value="Micaela Nogues">Micaela Nogues</option>
                <option value="Karina Rios">Karina Rios</option>
                <option value="Florencia Montenegro">Florencia Montenegro</option>
                <option value="Etelvina Castillo">Etelvina Castillo</option>
            </select>
        
            <span class="font-weight-bold">Horario lunes:</span>
            <select  class="select form-control" aria-label="Default select example" name="lunes" id="lunes">
                <option class="form-control" value="07:00 a 15:00">07:00 a 15:00</option>
                <option class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
                <option class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
                <option class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
                <option class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
                <option class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
                <option class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
                <option class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
                <option class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
                <option class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
                <option class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
                <option class="form-control" value="FRANCO">FRANCO</option>
            </select>
            <span class="font-weight-bold">Tareas Lunes:</span>
            <select class="form-control" name="tareas_lunes" id="tareas_lunes" >
                <option value="Monitoreo">Monitoreo</option >
                <option value="Backoffice">Backoffice</option>
                <option value="Atencion 777/112">Atencion 777/112</option>
                <option value="Backoffice y Atencion telefónica" >Backoffice y Atencion telefónica</option>
                <option value="112">112</option>
                <option value="777">777</option>
                <option value="Campaña">Campaña</option>
                <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
                <option value="FRANCO">FRANCO</option>
                               
            </select>
            <span class="font-weight-bold">Horario martes:</span>
            <select class="form-control" aria-label="Default select example" name="martes" id="martes">
                <option value="07:00 a 15:00">07:00 a 15:00</option>
                <option class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
                <option class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
                <option class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
                <option class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
                <option class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
                <option class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
                <option class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
                <option class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
                <option class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
                <option class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
                <option class="form-control" value="FRANCO">FRANCO</option>
            </select>
            <span class="font-weight-bold">Tareas Martes:</span>
            <select class="form-control" name="tareas_martes" id="tareas_martes">
                <option value="Monitoreo">Monitoreo</option>
                <option value="Backoffice">Backoffice</option>
                <option value="Atencion 777/112">Atencion 777/112</option>
                <option value="Backoffice y Atencion telefónica">Backoffice y Atencion telefónica</option>
                <option value="112">112</option>
                <option value="777">777</option>
                <option value="Campaña">Campaña</option>
                <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
                <option value="FRANCO">FRANCO</option>
                
                
            </select>
            <span class="font-weight-bold">Horario miercoles:</span>
            <select class="form-control" aria-label="Default select example" name="miercoles" id="miercoles">
                <option class="form-control" value="07:00 a 15:00">07:00 a 15:00</option>
                <option class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
                <option class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
                <option class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
                <option class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
                <option class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
                <option class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
                <option class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
                <option class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
                <option class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
                <option class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
                <option class="form-control" value="FRANCO">FRANCO</option>
            </select>
            <span class="font-weight-bold">Tareas Miercoles:</span>
            <select class="form-control" name="tareas_miercoles" id="tareas_miercoles">
                <option value="Monitoreo">Monitoreo</option>
                <option value="Backoffice">Backoffice</option>
                <option value="Atencion 777/112">Atencion 777/112</option>
                <option value="Backoffice y Atencion telefónica">Backoffice y Atencion telefónica</option>
                <option value="112">112</option>
                <option value="777">777</option>
                <option value="Campaña">Campaña</option>
                <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
                <option value="FRANCO">FRANCO</option>
                
                
            </select>
            <span class="font-weight-bold">Horario jueves:</span>
            <select class="form-control" aria-label="Default select example" name="jueves" id="jueves">
                <option class="form-control" value="07:00 a 15:00">07:00 a 15:00</option>
                <option class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
                <option class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
                <option class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
                <option class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
                <option class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
                <option class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
                <option class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
                <option class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
                <option class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
                <option class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
                <option class="form-control" value="FRANCO">FRANCO</option>
            </select>
            <span class="font-weight-bold">Tareas Jueves:</span>
            <select class="form-control" name="tareas_jueves" id="tareas_jueves" >
                <option value="Monitoreo">Monitoreo</option>
                <option value="Backoffice">Backoffice</option>
                <option value="Atencion 777/112">Atencion 777/112</option>
                <option value="Backoffice y Atencion telefónica" >Backoffice y Atencion telefónica</option>
                <option value="112">112</option>
                <option value="777">777</option>
                <option value="Campaña">Campaña</option>
                <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
                <option value="FRANCO">FRANCO</option>
             
                
            </select>
            <span class="font-weight-bold">Horario viernes:</span>
            <select class="form-control" aria-label="Default select example" name="viernes" id="viernes">
                <option class="form-control" value="07:00 a 15:00">07:00 a 15:00</option>
                <option class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
                <option class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
                <option class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
                <option class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
                <option class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
                <option class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
                <option class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
                <option class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
                <option class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
                <option class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
                <option class="form-control" value="FRANCO">FRANCO</option>
            </select>
            <span class="font-weight-bold">Tareas viernes:</span>
            <select class="form-control" name="tareas_viernes" id="tareas_viernes">
                <option value="Monitoreo">Monitoreo</option>
                <option value="Backoffice">Backoffice</option>
                <option value="Atencion 777/112">Atencion 777/112</option>
                <option value="Backoffice y Atencion telefónica">Backoffice y Atencion telefónica</option>
                <option value="112">112</option>
                <option value="777">777</option>
                <option value="Campaña">Campaña</option>
                <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
                <option value="FRANCO">FRANCO</option>
                
                
            </select>
            <span class="font-weight-bold">Horario sabado:</span>
            <select class="form-control" aria-label="Default select example" name="sabado" id="sabado">
                <option class="form-control" value="07:00 a 15:00">07:00 a 15:00</option>
                <option class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
                <option class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
                <option class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
                <option class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
                <option class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
                <option class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
                <option class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
                <option class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
                <option class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
                <option class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
                <option class="form-control" value="FRANCO">FRANCO</option>
            </select>
            <span class="font-weight-bold">Tareas Sabado:</span>
            <select class="form-control" name="tareas_sabado" id="tareas_sabado">
                <option value="Monitoreo">Monitoreo</option>
                <option value="Backoffice">Backoffice</option>
                <option value="Atencion 777/112">Atencion 777/112</option>
                <option value="Backoffice y Atencion telefónica">Backoffice y Atencion telefónica</option>
                <option value="112">112</option>
                <option value="777">777</option>
                <option value="Campaña">Campaña</option>
                <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
                <option value="FRANCO">FRANCO</option>
                
                
            </select>
            <span class="font-weight-bold">Horario domingo:</span>
            <select class="form-control" aria-label="Default select example" name="domingo" id="domingo">
                <option class="form-control" value="07:00 a 15:00">07:00 a 15:00</option>
                <option class="form-control" value="08:00 a 16:00">08:00 a 16:00</option>
                <option class="form-control" value="10:00 a 18:00">10:00 a 18:00</option>
                <option class="form-control" value="10:00 a 14:00">10:00 a 14:00</option>
                <option class="form-control" value="14:00 a 22:00">14:00 a 22:00</option>
                <option class="form-control" value="15:00 a 22:00">15:00 a 22:00</option>
                <option class="form-control" value="15:30 a 22:00">15:30 a 22:00</option>
                <option class="form-control" value="22:00 a 07:0">22:00 a 07:00</option>
                <option class="form-control" value="15:00 a 19:00">15:00 a 19:00</option>
                <option class="form-control" value="09:00 a 16:00">09:00 a 16:00</option>
                <option class="form-control" value="09:00 a 13:00">09:00 a 13:00</option>
                <option class="form-control" value="FRANCO">FRANCO</option>
            </select>
            <span class="font-weight-bold">Tareas Domingo:</span>
            <select class="form-control" name="tareas_domingo" id="tareas_domingo">
                <option value="Monitoreo">Monitoreo</option>
                <option value="Backoffice">Backoffice</option>
                <option value="Atencion 777/112">Atencion 777/112</option>
                <option value="Backoffice y Atencion telefónica">Backoffice y Atencion telefónica</option>
                <option value="112">112</option>
                <option value="777">777</option>
                <option value="Campaña">Campaña</option>
                <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
                <option value="FRANCO">FRANCO</option>
                
                
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


<!-- una vez hecho el FOR , la variable data contiene la informacion del operador para asignar como value a los select-->

<script>
    function selectedLunes(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->tareas_lunes); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
function selectedMartes(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->tareas_martes); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
function selectedMiercoles(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->tareas_miercoles); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
function selectedJueves(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->tareas_jueves); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
function selectedViernes(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->tareas_viernes); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
function selectedSabado(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->tareas_sabado); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
function selectedDomingo(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->tareas_domingo); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}

function selectedDLunes(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->lunes); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
function selectedDMartes(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->martes); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
function selectedDMiercoles(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->miercoles); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
function selectedDJueves(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->jueves); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
function selectedDViernes(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->viernes); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
function selectedDSabado(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->sabado); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
function selectedDDomingo(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->domingo); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}

function selectedSupervisor(id) {
    var select = document.getElementById(id);
    var guardado = '<?php echo e($informacion[0]->supervisor); ?>';

    for (let i = 0; i < select.length; i++) {
        if (select[i].value == guardado) {
            select.value = select[i].value;
            break;
        }
    }

}
selectedSupervisor("supervisor");
selectedDLunes("lunes");
selectedDMartes("martes");
selectedDMiercoles("miercoles");
selectedDJueves("jueves");
selectedDViernes("viernes");
selectedDSabado("sabado");
selectedDDomingo("domingo");
selectedLunes("tareas_lunes");
selectedMartes("tareas_martes");
selectedMiercoles("tareas_miercoles");
selectedJueves("tareas_jueves");
selectedViernes("tareas_viernes");
selectedSabado("tareas_sabado");
selectedDomingo("tareas_domingo");
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\supervision\resources\views/gestion/edit.blade.php ENDPATH**/ ?>