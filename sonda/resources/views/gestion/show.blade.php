@extends('layouts.app')

@section('content')
<!--<h1>{{$operador->nombre}}</h1>-->

<!--<h1>{{$operador->nombre}}</h1>-->
<table class="table table-bordered ">
  <thead class="thead-dark ">
      <tr>
          <th scope="col">Nombre</th>
          <th scope="col">legajo</th>
          <th scope="col">Supervisor</th>
          <th scope="col">Categoria</th>
          <th scope="col">Feriados Trabajados</th>
          <th scope="col">Compensaciones</th>
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



<table class="table table-active">
  <thead class="table table-dark">
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
        <td><span class="badge badge-secondary">{{$operador->tareas_lunes}}</span></td>
        <td><span class="badge badge-secondary">{{$operador->tareas_martes}}</span></td>
        <td><span class="badge badge-secondary">{{$operador->tareas_miercoles}}</span></td>
        <td><span class="badge badge-secondary">{{$operador->tareas_jueves}}</span></td>
        <td><span class="badge badge-secondary">{{$operador->tareas_viernes}}</span></td>
        <td><span class="badge badge-secondary">{{$operador->tareas_sabado}}</span></td>
        <td><span class="badge badge-secondary">{{$operador->tareas_domingo}}</span></td>
      </tr>

   
  </tbody>
</table>


<h3>Seguimiento</h3>

<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Dias a favor
    <span class="badge badge-success badge-pill">{{$operador->diasAFavor}}</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Dias en contra
    <span class="badge badge-danger badge-pill">{{$operador->diasEnContra}}</span>
  </li>
  <!--
  <li class="list-group-item d-flex justify-content-between align-items-center">
    HS a favor
    <span class="badge badge-danger badge-pill">{{$operador->diasEnContra}}</span>
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

<a class="btn btn-secondary mr-2 mt-5" href="{{route('gestion.index')}}">Volver</a>



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
        @foreach ($fechas as $fecha )
        {{$fecha}}
        <br>

        @endforeach
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

        <table class="table">
          <thead class="thead-dark">
            <tr>

              <th scope="col">Trabajó el :</th>
              <th scope="col">Compensó el :</th>

            </tr>
          </thead>
          <tbody>

            <?php
            for ($i = 0; $i < count($fechasCompensadas); $i++) {
              echo '<tr> <td>'  . $fechasCompensadas[$i] . '</td>';
              echo '<td>'  . $fechasCompensadas2[$i] . '</td></tr>';
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

<!-- de esta forma puedo obtener la fecha del sistema, para cronometrar eventos.
  <?php
  echo getdate()['year'] . '-' . getdate()['mon'] . '-' . getdate()['mday'];
  ?>
-->



@endsection