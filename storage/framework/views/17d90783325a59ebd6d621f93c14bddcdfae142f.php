

<?php $__env->startSection('content'); ?>

<!--Defino la ubicacion de los elementos-->

<div class="container" id="divGeneral">

    

<!--Elemento1 -->
<div class="row">

    <div class="col">
        <span class="badge badge-dark">Mostrar personal a cargo de:</span>
        <select name="supervisores" class="form-control" id="supervisores">
            <option value="todos" class="form-control" id="todos">Todos</option>
            <?php $__currentLoopData = $supervisores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supervisor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($supervisor->nombre); ?>" class="form-control"><?php echo e($supervisor->nombre); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      <div class="card mt-2">
        <p class="card-header">Gestiones:</p>
        <div class="card-body">
            <a class="btn btn-info d-block mt-2" data-toggle="modal" data-target="#exampleModalLong">Coaching Express  <img src="<?php echo e(asset('img/summarize_white_24dp.svg')); ?>" alt=""></a>
        <!-- Modal para consulta de notas por cantidad -->
        <a type="button" class="btn btn-success d-block mt-2" data-toggle="modal" data-target="#exampleModalLong2">Notas por cantidad  <img src="<?php echo e(asset('img/confirmation_number_white_24dp.svg')); ?>" alt=""></a>
        <a type="button" class="btn btn-danger d-block mt-2" href="<?php echo e(route('gestion.reportes')); ?>">Reporting  <img src="<?php echo e(asset('img/confirmation_number_white_24dp.svg')); ?>" alt=""></a>
        </div>
      </div>
    </div>
<a href="<?php echo e(route('gestion.vistaPorHora')); ?>" style="text-decoration:none;">
    <div class="col">

        <table class="table table-sm table-bordered alert alert-warning">
            <thead>
              <tr>
                <th scope="col"><span class="badge badge-dark">Cantidad de agentes por turno</span></th>
                <th scope="col">Lun</th>
                <th scope="col">Mar</th>
                <th scope="col">Mier</th>
                <th scope="col">Juev</th>
                <th scope="col">Vier</th>
                <th scope="col">Sab</th>
                <th scope="col">Dom</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">14:00 a 22:00</th>
                    <?php $__currentLoopData = $de14a22; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td class="alert alert-success"><?php echo e($item); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr> 
              <tr>
                <tr>
                    <th scope="row">10:00 a 18:00</th>
                    <?php $__currentLoopData = $de10a18; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="alert alert-danger"><?php echo e($item); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <tr>
                    <th scope="row">09:00 a 16:00</th>
                    <?php $__currentLoopData = $de9a16; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="alert alert-warning"><?php echo e($item); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <tr>
                    <th scope="row">09:00 a 13:00</th>
                    <?php $__currentLoopData = $de9a13; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($item); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>

                  <tr>
                    <th scope="row">08:00 a 15:00</th>
                    <?php $__currentLoopData = $de8a15; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($item); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <tr>
                
                    <th scope="row">08:00 a 16:00</th>
                    <?php $__currentLoopData = $de8a16; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td class="alert alert-dark"><?php echo e($item); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <tr>
                    <th scope="row">07:00 a 15:00</th>
                    <?php $__currentLoopData = $de7a15; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($item); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                <th scope="row">07:00 a 14:00</th>
                <?php $__currentLoopData = $de7a14; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($item); ?></td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tr>
            
            
             
           
           
           
             
            </tbody>
          </table>
 

    </div>
</a>

        <!--Elemento 2-->
<div class="col-lg-10">
   
    <table class="table  table-hover table-striped" id="tableOperadores">
        <thead class="thead-dark">
            <tr>
                <th class="text-white" scole="col"><i class="text-white">Personal registrado</i> </th>
                <th class="text-white" scole="col">Categoria</th>
                <th class="text-white" scole="col">Sup a cargo</th>
                <th class="text-white" scole="col">Dias a favor</th>
                <th class="text-white" scole="col">Opciones</th>


            </tr>

        </thead>
        <tbody>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
            <?php $__currentLoopData = $operadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="<?php echo e($operador->supervisor); ?>" id="sup">
                <td><img style="opacity: 0.7; margin-bottom: 5px; width: 30px;margin-bottom: 4px;"  src="<?php echo e(asset('img/support_agent_black_24dp.svg')); ?>" alt=""><b style="margin-left: 5px"><?php echo e($operador->nombre); ?></b></td>
                <td><?php echo e($operador->categoria); ?></td>
                <td><?php echo e($operador->supervisor); ?></td>
                <?php if(($operador->diasAFavor)==0): ?>
               <td><span></span></td>
                <?php else: ?>
                <?php if(($operador->diasAFavor)> 0 && ($operador->diasAFavor)< 2 ): ?>
                <td><span class="badge badge-warning text-white"><?php echo e($operador->diasAFavor); ?></span></td>
                <?php else: ?>
                <td><span class="badge badge-danger"><?php echo e($operador->diasAFavor); ?></span></td>
                <?php endif; ?>

                <?php endif; ?>
                <td>
                    <!--
                    <a href="<?php echo e(route('gestion.show', ['operador'=>$operador->id])); ?>" class="badge badge-success text-white ">Ver</a>
                    <a href="<?php echo e(route('gestion.edit', ['operador'=>$operador->id])); ?>" class="badge text-white "  style="background-color: #416BEC">Editar</a>
                    <a href="<?php echo e(route('gestion.notas', ['operador'=>$operador->id])); ?>" class=" badge badge-warning text-white " >Notas</a>                   
                    <a href="<?php echo e(route('gestion.acciones', ['operador'=>$operador->id])); ?>" class=" badge text-white "  style="background-color: #63224f">Compensación</a>
                    <a href="<?php echo e(route('gestion.historico', ['operador'=>$operador->id])); ?>" class=" badge text-white "  style="background-color: #63224f">Historico</a>
                    <a href="<?php echo e(route('gestion.destroy', ['operador'=>$operador->id])); ?>" class="badge badge-danger">Eliminar</a>
                    -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>

                        <?php else: ?>
                        <li class="nav-item dropdown ">
                            <a id="navbarDropdown" class=" dropdown-toggle btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="<?php echo e(asset('/img/timeline_black_24dp.svg')); ?>" alt=""> Vista
                            </a>

                            <div class="dropdown-menu  " style="background-color: #f6f6f6 ;" aria-labelledby="navbarDropdown">
                                <a href="<?php echo e(route('gestion.show', ['operador'=>$operador->id])); ?>" class="dropdown-item">Ver</a>
                                <a href="<?php echo e(route('gestion.fichero', $operador->legajo)); ?>" class="dropdown-item">Fichadas</a>
                                <a href="<?php echo e(route('gestion.edit', ['operador'=>$operador->id])); ?>" class="dropdown-item">Editar</a>
                                <a href="<?php echo e(route('gestion.escuchas',$operador->nombre)); ?>" class="dropdown-item">Ver registros de Coaching Express</a>
                                <a href="<?php echo e(route('gestion.notas', ['operador'=>$operador->id])); ?>" class="dropdown-item ">Gestionar notas</a>
                                <a href="<?php echo e(route('gestion.acciones', ['operador'=>$operador->id])); ?>" class="dropdown-item ">Registrar compensacion de dia completo</a>
                                <a href="<?php echo e(route('gestion.historico', ['operador'=>$operador->id])); ?>" class="dropdown-item ">Historico</a>
                                <a href="<?php echo e(route('gestion.destroy', ['operador'=>$operador->id])); ?>" onclick="return eliminarEmpleado()" class="dropdown-item">Eliminar</a>



                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                </td>

            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <script>
                function eliminarEmpleado() {
                    let res = confirm('realmente quiere eliminar el item seleccionado?');
                    if (res) {
                        return true;
                    } else {
                        return false;
                    }
                }
            </script>
        </tbody>
    </table>
    <hr>
</div>


</div>










</div>

<!-- Modal1 -->
<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Consulta Notas por cantidad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <!-- Aca levantar los nombres de los tickets vigentes para consultar -->
                    <!-- chekbutton para notas vigentes/no vigentes -->
                    <!-- select multiple para operadores (traer operadores) -->
                    <!-- todos check button que invalide el select anterior -->
                    <!-- Enviar todo por post, procesar y retornar una vista con la info -->
                    <form class="form-group" method="POST" action="<?php echo e(route('gestion.recolectarNotas')); ?>">
                       
                        <?php echo csrf_field(); ?>
                        <h4>Seleccionar personas </h4>
                        <label>Todos </label>
                        <input  type="checkbox" name="check" id="seleccionarPersonas">
                        <select required id="selectPersonas" style="height: 200px" name="listadoOperadores[]" class="form-select form-control " multiple aria-label="multiple select example">

                            <?php $__currentLoopData = $operadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($operador->nombre); ?>"><?php echo e($operador->nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label for="tipo">Tipo de consulta:</label>
                        <select required name="tipo" id="" class="form-control">
                            <?php $__currentLoopData = $nombresNotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($nombre->nombreNota); ?>"><?php echo e($nombre->nombreNota); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <option value="todas" class="form-control">todos</option>

                        </select>
                        <label for="inicio">Desde:</label>
                        <input required type="date" name="inicio" class="form-control">
                        <label for="fin">Hasta:</label>
                        <input required type="date" name="fin" class="form-control">

                        <script>
                            function todos() {
                                //falta realizar una funcion que recorra todo el select, y que destilde todas las opciones 
                                //tildadas una vez que se checkea el checkbox.
                                var elementoSelect = document.getElementById('selectPersonas');
                                var elemento = document.getElementById('seleccionarPersonas');
                                elemento.addEventListener('change', function() {
                                    if (this.checked) {

                                       
                                        var tmsel = document.getElementById('selectPersonas').length;
                                        for (var z = 0; z < tmsel; z++) {
                                            document.getElementById('selectPersonas').options[z].selected = true;

                                        }

                                    } else {
                                        
                                        for (var z = 0; z < tmsel; z++) {
                                            document.getElementById('selectPersonas').options[z].selected = false;

                                        }
                                    }
                                });


                            }
                            todos()
                        </script>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Consultar</button>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal2 -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

    
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">SISTEMA DE COACHING EXPRESS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form class="form-group" action="http://192.168.4.124/deliverySyS/Database.php" method="post" target="_blank">
                    <!--  <img class="btn" src="img/color-negativo.png" alt="">-->
                    <section>

                        <div class="content_quiz">
                            <div class="">
                                <section>
                                    <a href="http://192.168.4.124/player/plyer.html" target="_blank" onclick="window.open(this.href, this.target, 'width=500,height=250'); return false; ">Abrir reproductor</a>


                                    <div class="">



                                        <p><b> Agente:</b></p> <select  class="form-control select" name="agente" id="operadores" required>
                                            </p>

                                            
                                        <?php $__currentLoopData = $operadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($operador->nombre); ?>"><?php echo e($operador->nombre); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                        </select>


                                        <p><b> Fecha (<i>del llamado</i>): </b></p><input class=" form-control select" name="fecha" type="date" required>
                                        <!--traer supervisores de base de datos asi como los operadores.-->
                                        <label for="legajoSup"><b>Supervisor/a:</b></label>
                                        <select name="legajoSup" class=" form-control select" id="">
                                            <option value="Micaela Nogues">Micaela Nogues</option>
                                            <option value="Matias Gasañol">Matias Gasañol</option>
                                            <option value="Patricia Perez">Patricia Perez</option>
                                            <option value="Patricia Perez">Etelvina Castillo</option>
                                            <option value="Florencia Montenegro">Florencia Montenegro</option>

                                        </select>


                                        <p><b> Cola:</b></p> <select name="cola" class="form-control select" required>
                                            <option value="CLIENTES">CLIENTES</option>
                                            <option value="CORPORATIVOS">CORPORATIVOS</option>
                                            <option value="FACTURACION">FACTURACION</option>
                                            <option value="GUIA">GUIA</option>
                                            <option value="INTERNET-2">INTERNET-2</option>
                                            <option value="NO CLIENTES">NO CLIENTES</option>
                                            <option value="OTRAS">OTRAS</option>
                                            <option value="PACKTV">PACKTV</option>
                                            <option value="PAGOS">PAGOS</option>
                                            <option value="PRODUCTOS">PRODUCTOS</option>
                                            <option value="PROMOCIONES">PROMOCIONES</option>
                                            <option value="REPARACIONES">REPARACIONES</option>
                                            <option value="TELEFONIA-INTERNET">TELEFONIA-INTERNET</option>
                                            <option value="TELEVISION">TELEVISION</option>
                                            <option value="TELEVISION-PRODUCTOS">TELEVISION-PRODUCTOS</option>
                                        </select>

                                        <p><b> Linea:</b></p> <input class="form-control select" style="cursor: auto;" autocomplete="off" name="linea" type="text" required>


                                    </div>

                                </section>
                            </div>

                        </div>

                        <hr>
                        <h3 class="text-danger">Presentacion</h3>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="saludoEIdentificacion">
                            <label for="saludoEIdentificacion">Saludo e identificacion</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="recursosVocales">
                            <label for="recursosVocales">Recursos vocales (altura, intensidad, ritmo, tono, volumen)s</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="lenguaje">
                            <label for="lenguaje">Lenguaje (claro, conciso, coloquial, convincente, seguridad, muletillas, vocabulario informal,etc)</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="escuchaActiva">
                            <label for="escuchaActiva"> Escucha activa</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="empatia">
                            <label for="empatia"> Empatía con el/la abonado/a</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="respeto">
                            <label for="respeto"> Respeto</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="conduccion">
                            <label for="conduccion"> Conducción del llamado (indaga correctamente, acierta con las preguntas)</label>
                        </div>

                        <hr>

                        <h3 class="text-danger">Precisión</h3>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="brindaInfo">
                            <label for="brindaInfo"> Brinda información real y actualizada (agenda de coaching + información en sistema. Msj
                                administrativos, reclamos, etc)</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="speech">
                            <label for="speech">Uso de Speach predeterminado</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="derivaciones">
                            <label for="derivaciones"> Realiza adecuadamente derivaciones, chequeos y corroboración de datos (confirma titularidad, línea,etc)</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="contactoMail">
                            <label for="contactoMail"> Confirma mail de contacto</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="contactoCel">
                            <label for="contactoCel"> Confirma celular de contacto</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="registra">
                            <label for="registra"> Registra de manera correcta el resultado de la gestión (popup/matrix/SAT)</label>
                        </div>

                        <hr>
                        <h3 class="text-danger">Manejo de objeciones y capacidad de argumentación</h3>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="argumenta">
                            <label for="argumenta">Argumenta de manera entusiasta y convincente</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="respuestas">
                            <label for="respuestas">Da respuestas o argumentos de manera rápida y adecuada ante preguntas o situaciones imprevistas</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="diagnostico">
                            <label for="diagnostico"> Sondeo, diagnóstico</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="negociacion">
                            <label for="negociacion"> Capacidad de negociación (manejo de objeciones)</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" class="form-check-input" name="cierre">
                            <label for="cierre"> Cierre del llamado </label>
                        </div>

                        <hr>

                        <h3 class="text-danger">Observaciones supervisor/a:</h3>
                        <textarea class="form-control" autocomplete="off" name="observaciones" required></textarea>

                        <div class="envio">
                            <label for="nombreDoc">Nombre del archivo final: </label>
                            <input class="form-control" type="text" required name="nombreDoc" autocomplete="off" placeholder="nombre del archivo..." required>
                            <button class="btn btn-success text-white mt-5 form-control mb-5" type="submit">Guardar y
                                continuar</button>
                </form>

                <script type="text/javascript" src="<?php echo e(asset('js/player.js')); ?>"></script>
                <script type="text/javascript" src="<?php echo e(asset('js/mainPlayer.js')); ?>"></script>
            </div>

        </div>
    </div>










<script src="<?php echo e(asset('js/appMain.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callStats\resources\views/gestion/panel.blade.php ENDPATH**/ ?>