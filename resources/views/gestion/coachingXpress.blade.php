@extends('layouts.app')

<link rel="stylesheet" href="{{asset('css/components.css')}}">
<link rel="stylesheet" href="{{asset('css/icons.css')}}">
@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       
    
            <form class="form-group" action="Database.php" method="post">
             <!--  <img class="btn" src="img/color-negativo.png" alt="">-->
                <section>

                    <div class="content_quiz">
                        <div class="">
                            <section>


                                <div class="">



                                    <p><b> Agente:</b></p> <select class="form-control select" name="agente" id="" required>
                                        </p>
                                        <option value="Nahuel Buzzi">Nahuel Buzzi</option>
                                        <option value="Ayelen Riniti">Ayelen Riniti</option>
                                        <option value="Federico Gomez">Federico Gomez</option>
                                        <option value="Rodrigo Marini">Rodrigo Marini</option>
                                        <option value="Carla Riquelme">Carla Riquelme</option>
                                        <option value="Alex Barni">Alex Barni</option>
                                        <option value="Estefania Aguero">Estefania Aguero</option>
                                        <option value="Nicolas Tula">Nicolas Tula</option>
                                        <option value="Malena Cuelli">Malena Cuelli</option>
                                        <option value="Solange Bacaicoa">Solange Bacaicoa</option>
                                        <option value="Ilda Collante">Ilda Collante</option>
                                        <option value="Cristian Chavez">Cristian Chavez</option>
                                        <option value="Luis Ayala">Luis Ayala</option>
                                        <option value="Sandra Bustamante">Sandra Bustamante</option>
                                        <option value="Romina Zarate">Romina Zarate</option>
                                        <option value="Uriel Dobrovolsky">Uriel Dobrovolsky</option>
                                        <option value="Adrian Lebrini">Adrian Lebrini</option>
                                        <option value="jazmin Lopez">Jazmin Lopez</option>
                                        <option value="ximena valor">Ximena Valor</option>
                                        <option value="sebastian cervera">Sebastian Cervera</option>

                                    </select>


                                    <p><b> Fecha: </b></p><input class=" form-control select" name="fecha" type="date" required>
                               
                                    <label for="legajoSup"><b>Supervisor/a:</b></label>
                                    <select name="legajoSup" class=" form-control select" id="">
                                        <option value="Micaela Nogues">Micaela Nogues</option>
                                        <option value="Matias Gasañol">Matias Gasañol</option>
                                        <option value="Patricia Perez">Patricia Perez</option>
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

                                    <p><b> Linea:</b></p> <input class="form-control select" style="cursor: auto;"
                                        autocomplete="off" name="linea" type="text" required>


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
                        <label for="registra">  Registra de manera correcta el resultado de la gestión (popup/matrix/SAT)</label>
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
                        <label for="cierre">  Cierre del llamado </label>
                    </div>

                    <hr>

                    <h3 class="text-danger">Observaciones supervisor/a:</h3>
                    <textarea class="form-control" autocomplete="off" name="observaciones" required></textarea>

                    <div class="envio">
                        <label for="nombreDoc">Nombre del archivo final: </label>
                        <input class="form-control" type="text" required name="nombreDoc" autocomplete="off"
                            placeholder="nombre del archivo..." required>
                        <button class="btn btn-success text-white mt-5 form-control mb-5" type="submit">Guardar y
                            continuar</button>
            </form>
            
    <script type="text/javascript" src="{{asset('js/player.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mainPlayer.js')}}"></script>
        </div>
      
      </div>
    </div>


@endsection