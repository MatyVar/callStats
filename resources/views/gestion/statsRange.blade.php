@extends('layouts.app')
@section('content')

<table class="table table-bordered table-sm " >
    <thead class="bg-dark text-white">
      <tr>  
            <th scope="col">AGENTE</th>
            <th scope="col">SUPERVISOR</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">TIEMPO TRABAJADO</th>
            <th scope="col">ATENDIDAS TOTALES</th>
            <th scope="col">ATENDIDAS ENTRANTES</th>
            <th scope="col">ATENDIDAS SALIENTES</th>
            <th scope="col">CANTIDAD (acw)</th>
            <th scope="col">TIEMPO (acw)</th>
            <th scope="col">ACW POR LLAMADA</th>
            <th scope="col">TALKTIME TOTAL</th>
            <th scope="col">TALKTIME POR LLAMADA</th>
            <th scope="col">HOLDTIME TOTAL</th>
            <th scope="col">HOLDTIME POR LLAMADA</th>            
            <th scope="col">TIEMPO (almuerzo)</th>
            <th scope="col">TIEMPO (backoffice)</th>
            <th scope="col">TIEMPO (reunion)</th>
            <th scope="col">TMO</th>
            <th scope="col">TMO POR LLAMADA</th>
            <th scope="col">AVAIL</th>
            <th scope="col">AVAIL EN %</th>
            <th scope="col">OCUPPANCY</th>
           
      </tr>
    </thead>
    <tbody>
     
   
@if(count($registros)>0)
<?php $fechaAux=$registros[0]->fecha; ?>
<span class="badge badge-warning">{{$fechaAux}}</span>
@endif


@foreach ($registros as $registro)

@if($fechaAux==$registro->fecha)

<tr>

   <td>{{$registro->AGENTE}}</td>
   <td>{{$registro->SUPERVISOR}}</td>
   <td>{{$registro->CATEGORIA}}</td>
   <td>{{$registro->TIEMPO_TRABAJADO}}</td>
   <td>{{$registro->ATENDIDAS_TOTALES}}</td>
   <td>{{$registro->ATENDIDAS_ENTRANTES}}</td>
   <td>{{$registro->ATENDIDAS_SALIENTES}}</td>
   <td>{{$registro->CANTIDAD_acw}}</td>
   <td>{{$registro->TIEMPO_acw}}</td>
   <td>{{$registro->ACW_POR_LLAMADA}}</td>
   <td>{{$registro->TALKTIME_TOTAL}}</td>
   <td>{{$registro->TALKTIME_POR_LLAMADA}}</td>
   <td>{{$registro->HOLDTIME_TOTAL}}</td>
   <td>{{$registro->HOLDTIME_POR_LLAMADA}}</td>   
   <td>{{$registro->TIEMPO_almuerzo}}</td>
   <td>{{$registro->TIEMPO_backoffice}}</td>
   <td>{{$registro->TIEMPO_reunion}}</td>
   <td>{{$registro->TMO}}</td>
   <td>{{$registro->TMO_POR_LLAMADA}}</td>
   <td>{{$registro->AVAIL}}</td>
   <td>{{$registro->AVAIL_EN_PORCENTAJE}}</td>
   
   <td>{{$registro->OCUPPANCY}}</td>
  
  </tr>


@else

</tbody>
</table>

<span class="badge badge-warning">{{$fechaAux=$registro->fecha}}</span>
<table class="table table-bordered table-sm">
    <thead class="bg-dark text-white">
      <tr>
        <th scope="col">AGENTE</th>
        <th scope="col">SUPERVISOR</th>
        <th scope="col">CATEGORIA</th>
        <th scope="col">TIEMPO TRABAJADO</th>
        <th scope="col">ATENDIDAS TOTALES</th>
        <th scope="col">ATENDIDAS ENTRANTES</th>
        <th scope="col">ATENDIDAS SALIENTES</th>
        <th scope="col">CANTIDAD (acw)</th>
        <th scope="col">TIEMPO (acw)</th>
        <th scope="col">ACW POR LLAMADA</th>
        <th scope="col">TALKTIME TOTAL</th>
        <th scope="col">TALKTIME POR LLAMADA</th>
        <th scope="col">HOLDTIME TOTAL</th>
        <th scope="col">HOLDTIME POR LLAMADA</th>        
        <th scope="col">TIEMPO (almuerzo)</th>
        <th scope="col">TIEMPO (backoffice)</th>
        <th scope="col">TIEMPO (reunion)</th>
        <th scope="col">TMO</th>
        <th scope="col">TMO POR LLAMADA</th>
        <th scope="col">AVAIL</th>
        <th scope="col">AVAIL EN %</th>
        <th scope="col">OCUPPANCY</th>
           
      </tr>
    </thead>
    <tbody>
        <tr>
            
            <td>{{$registro->AGENTE}}</td>
            <td>{{$registro->SUPERVISOR}}</td>
            <td>{{$registro->CATEGORIA}}</td>
            <td>{{$registro->TIEMPO_TRABAJADO}}</td>
            <td>{{$registro->ATENDIDAS_TOTALES}}</td>
            <td>{{$registro->ATENDIDAS_ENTRANTES}}</td>
            <td>{{$registro->ATENDIDAS_SALIENTES}}</td>
            <td>{{$registro->CANTIDAD_acw}}</td>
            <td>{{$registro->TIEMPO_acw}}</td>
            <td>{{$registro->ACW_POR_LLAMADA}}</td>
            <td>{{$registro->TALKTIME_TOTAL}}</td>
            <td>{{$registro->TALKTIME_POR_LLAMADA}}</td>
            <td>{{$registro->HOLDTIME_TOTAL}}</td>
            <td>{{$registro->HOLDTIME_POR_LLAMADA}}</td>            
            <td>{{$registro->TIEMPO_almuerzo}}</td>
            <td>{{$registro->TIEMPO_backoffice}}</td>
            <td>{{$registro->TIEMPO_reunion}}</td>
            <td>{{$registro->TMO}}</td>
            <td>{{$registro->TMO_POR_LLAMADA}}</td>
            <td>{{$registro->AVAIL}}</td>
            <td>{{$registro->AVAIL_EN_PORCENTAJE}}</td>
            <td>{{$registro->OCUPPANCY}}</td>
          
           
           
          </tr>
@endif






    
@endforeach
<a class="btn btn-warning mr-2 text-white" href="{{route('gestion.reportes')}}">Volver</a>
@endsection

