@extends('layouts.app')

@section('content')
<!--<h1>{{$operador->nombre}}</h1>-->

<!--<h1>{{$operador->nombre}}</h1>-->

<div class="container rounded ">
  <table class="table table-bordered rounded">
    <thead class="bg-danger text-white rounded">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">legajo</th>
        <th scope="col">Supervisor</th>
        <th scope="col">Categoria</th>
        <th scope="col">Feriados completos Trabajados</th>
        <th scope="col">Compensaciones completas efectuadas</th>
        <!-- <th scope="col">Observaciones Positivas</th>-->
        <!-- <th scope="col">Llamadas de atencion</th>-->
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>{{$operador->nombre}}</b></td>
        <th scope="row">{{$operador->legajo}}</th>
        <td>{{$operador->supervisor}}</td>
        <td>{{$operador->categoria}}</td>
        <td><a class="badge badge-secondary " href="#" data-toggle="modal" data-target="#exampleModal">{{$operador->feriadosTrabajados}}</a></td>
        <td><a class="badge badge-secondary " href="#" data-toggle="modal" data-target="#exampleModalCenter">{{$operador->feriados_compensados}}</a></td>
        <!-- <td><a href="">cantidad traida de db</a></td>-->
        <!--<td><a href="">cantidad traida de db</a></td>-->

      </tr>

    </tbody>
  </table>



  <table class="table table-bordered ">
    <thead class="bg-primary text-white">
      <tr>
        <th scope="col">HORARIOS VIGENTES</th>
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

      <tr>
        <td><b>Horario</b></td>
        <td>{{$operador->lunes}}</td>
        <td>{{$operador->martes}}</td>
        <td>{{$operador->miercoles}}</td>
        <td>{{$operador->jueves}}</td>
        <td>{{$operador->viernes}}</td>
        <td>{{$operador->sabado}}</td>
        <td>{{$operador->domingo}}</td>
      </tr>
      <tr>
        <td><b>Tarea</b></td>
        <td><span class="badge badge-warning">{{$operador->tareas_lunes}}</span></td>
        <td><span class="badge badge-warning">{{$operador->tareas_martes}}</span></td>
        <td><span class="badge badge-warning">{{$operador->tareas_miercoles}}</span></td>
        <td><span class="badge badge-warning">{{$operador->tareas_jueves}}</span></td>
        <td><span class="badge badge-warning">{{$operador->tareas_viernes}}</span></td>
        <td><span class="badge badge-warning">{{$operador->tareas_sabado}}</span></td>
        <td><span class="badge badge-warning">{{$operador->tareas_domingo}}</span></td>
      </tr>


    </tbody>
  </table>


  <h3>Seguimiento</h3>

  <ul class="list-group rounded">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Dias completos a favor
      <span class="badge badge-success badge-pill">{{$operador->diasAFavor}}</span>
    </li>
    <!--
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Dias en contra
    <span class="badge badge-danger badge-pill">{{$operador->diasEnContra}}</span>
  </li>
   
  <li class="list-group-item d-flex justify-content-between align-items-center">
    HS a favor
    <span class="badge badge-success badge-pill">{{$operador->diasEnContra}}</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    HS en contra
    <span class="badge badge-danger badge-pill">{{$operador->diasEnContra}}</span>
  </li>
 
  <li class="list-group-item d-flex justify-content-between align-items-center">
    llegadas Tarde
    <span class="badge badge-danger badge-pill"></span>
  </li>
-->
  </ul>
  <h3 class="mt-3">Notas supervision:</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">TIPO</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">FECHA</th>
        <th scope="col">CONTENIDO</th>
        <th scope="col">ESTADO</th>
        <th scope="col">FINALIZO VIGENCIA</th>

      </tr>
    </thead>
    <tbody>
      @foreach($notas as $nota)
 

      @if($nota->vigencia =='si')

      <tr>
        <th style="background-color: #ffe4e4;" scope="row">{{$nota->titulo}}</th>
        <td style="background-color: #ffe4e4;">{{$nota->nombre}}</td>
        <td style="background-color: #ffe4e4;">{{$nota->fecha}}</td>
        <td style="background-color: #ffe4e4;">{{$nota->nota}}</td>
        <td style="background-color: #ffe4e4;">VIGENTE</td>
        <td style="background-color: #ffe4e4;"><i>aun vigente</i></td>


      </tr>
      @else
      <tr>
        <th style="background-color: #beffac;" scope="row">{{$nota->titulo}}</th>
        <td style="background-color: #beffac;">{{$nota->nombre}}</td>
        <td style="background-color: #beffac;">{{$nota->fecha}}</td>
        <td style="background-color: #beffac;">{{$nota->nota}}</td>
        <td style="background-color: #beffac;">NO VIGENTE</td>
        <td style="background-color: #beffac;"><b>{{$nota->finVigencia}}</b> - {{$nota->descripcionFin}}</td>

      </tr>
      @endif

      @endforeach
    </tbody>
  </table>
  <a class="btn btn-warning mr-2 mt-5 text-white" href="{{route('gestion.index')}}">Volver</a>



  <!-- Button trigger modal -->

  <!-- Feriados trabajados -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Feriados Trabajados</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <table class="table">
            <thead>
              <tr>

                <th scope="col">Feriado</th>
                <th scope="col">Compensado</th>
                <th scope="col">Eliminiar</th>
              </tr>
            </thead>
            <tbody>
              <tr>




                @for($i = 0; $i < count($fechas); $i++) <td>{{$fechas[$i]}}</td>
                  @if($compensados[$i]=='si')
                  <td><b class="badge badge-success"><img src="{{asset('img/check_white_18dp.svg')}}" alt=""></b></td>
                  @else
                  <td><b class="badge badge-danger"><img src="{{asset('img/close_white_18dp.svg')}}" alt=""></b></td>
                  @endif
                  <td><a onclick="return eliminarEmpleado()" class="btn btn-danger" href="{{route('gestion.deleteFecha',['operador'=>$operador->nombre,'fecha'=>$fechas[$i]])}}"><img src="{{asset('img\delete_white_24dp.svg')}}" alt=""></a></td>
              </tr>
              @endfor


            </tbody>
          </table>

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






        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">

          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>

                <th scope="col">Trabajó el :</th>
                <th scope="col">Compensó el :</th>

              </tr>
            </thead>
            <tbody>

              <?php
              for ($i = 0; $i < count($fechasCompensadas); $i++) {
                echo '<tr> <td><b>'  . $fechasCompensadas[$i] . '</b></td>';
                echo '<td><b>'  . $fechasCompensadas2[$i] . '</b></td></tr>';
              }



              ?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- de esta forma puedo obtener la fecha del sistema, para cronometrar eventos.
  <?php
  echo getdate()['year'] . '-' . getdate()['mon'] . '-' . getdate()['mday'];
  ?>
-->



@endsection