@extends('layouts.app')
@section('content')

<table class="table table-bordered table-sm">
    <thead class="bg-dark text-white">
      <tr>   
        <th scope="col">DIA</th>
        <th scope="col">AGENTE</th>
        <th scope="col">SUPERVISOR</th>
        <th scope="col">ATENDIDAS TOTALES</th>
        <th scope="col">ring</th>
         <th scope="col">TALKTIME TOTAL</th>
         <th scope="col">TIEMPO (acw)</th>
         <th scope="col">AVAIL</th>
         <th scope="col">TIEMPO (almuerzo)</th>
         <th scope="col">TIEMPO (reunion)</th>
         <th scope="col">TIEMPO (backoffice)</th>
         <th scope="col">inicio sesion</th>
         <th scope="col">fin sesion</th>
         <th scope="col">AVAIL EN %</th>
         <th scope="col">torre</th>
         <th scope="col">inicio de sesion 2</th>
         <th scope="col">fin de sesion 2</th>
         <th scope="col">TIEMPO DE SESION</th>
         <th scope="col">TIEMPO DE SESION EN MINUTOS</th>
         <th scope="col">ATENDIDAS ENTRANTES</th>
         <th scope="col">ATENDIDAS SALIENTES</th>
         <th scope="col">HOLDTIME TOTAL</th>

           
      </tr>
    </thead>
    <tbody>
     
   
 
<?php $fechaAux=$registros[0]->fecha; ?>
<span class="badge badge-warning">{{$fechaAux}}</span>
@foreach ($registros as $registro)

@if($fechaAux==$registro->fecha)

<tr>
  <td>{{$registro->fecha}}</td>
  <td>{{$registro->AGENTE}}</td>
  <td>{{$registro->SUPERVISOR}}</td>
  <td>{{$registro->ATENDIDAS_TOTALES}}</td>
  <td></td>
  <td>{{$registro->TALKTIME_TOTAL}}</td>
  <td>{{$registro->TIEMPO_acw}}</td>
  <td>{{$registro->AVAIL}}</td>
  <td>{{$registro->TIEMPO_almuerzo}}</td>
  <td>{{$registro->TIEMPO_reunion}}</td>
  <td>{{$registro->TIEMPO_backoffice}}</td>
  <td></td>
  <td></td>
  <td>{{$registro->AVAIL_EN_PORCENTAJE}}</td>
  <td>{{$registro->torre}}</td>
  <td></td>
  <td></td>
  <td>{{$registro->TIEMPO_TRABAJADO}}</td>
  <td></td>
  <td>{{$registro->ATENDIDAS_ENTRANTES}}</td>
  <td>{{$registro->ATENDIDAS_SALIENTES}}</td>
  <td>{{$registro->HOLDTIME_TOTAL}}</td>

   

  
  </tr>


@else

</tbody>
</table>

<span class="badge badge-warning">{{$fechaAux=$registro->fecha}}</span>
<table class="table table-bordered table-sm">
    <thead class="bg-dark text-white">
      <tr>
        <th scope="col">DIA</th>
        <th scope="col">AGENTE</th>
        <th scope="col">SUPERVISOR</th>
        <th scope="col">ATENDIDAS TOTALES</th>
        <th scope="col">ring</th>
         <th scope="col">TALKTIME TOTAL</th>
         <th scope="col">TIEMPO (acw)</th>
         <th scope="col">AVAIL</th>
         <th scope="col">TIEMPO (almuerzo)</th>
         <th scope="col">TIEMPO (reunion)</th>
         <th scope="col">TIEMPO (backoffice)</th>
         <th scope="col">inicio sesion</th>
         <th scope="col">fin sesion</th>
         <th scope="col">AVAIL EN %</th>
         <th scope="col">torre</th>
         <th scope="col">inicio de sesion 2</th>
         <th scope="col">fin de sesion 2</th>
         <th scope="col">TIEMPO DE SESION</th>
         <th scope="col">TIEMPO DE SESION EN MINUTOS</th>
         <th scope="col">ATENDIDAS ENTRANTES</th>
         <th scope="col">ATENDIDAS SALIENTES</th>
         <th scope="col">HOLDTIME TOTAL</th>

      </tr>
    </thead>
    <tbody>
        <tr>
            
            <td>{{$registro->fecha}}</td>
            <td>{{$registro->AGENTE}}</td>
            <td>{{$registro->SUPERVISOR}}</td>
            <td>{{$registro->ATENDIDAS_TOTALES}}</td>
            <td></td>
            <td>{{$registro->TALKTIME_TOTAL}}</td>
            <td>{{$registro->TIEMPO_acw}}</td>
            <td>{{$registro->AVAIL}}</td>
            <td>{{$registro->TIEMPO_almuerzo}}</td>
            <td>{{$registro->TIEMPO_reunion}}</td>
            <td>{{$registro->TIEMPO_backoffice}}</td>
            <td></td>
            <td></td>
            <td>{{$registro->AVAIL_EN_PORCENTAJE}}</td>
            <td>{{$registro->torre}}</td>
            <td></td>
            <td></td>
            <td>{{$registro->TIEMPO_TRABAJADO}}</td>
            <td></td>
            <td>{{$registro->ATENDIDAS_ENTRANTES}}</td>
            <td>{{$registro->ATENDIDAS_SALIENTES}}</td>
            <td>{{$registro->HOLDTIME_TOTAL}}</td>
            
           
          </tr>
@endif






    
@endforeach
<a class="btn btn-warning mr-2 text-white" href="{{route('gestion.reportes')}}">Volver</a>
@endsection