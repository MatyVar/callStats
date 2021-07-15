@extends('layouts.app')

@section('content')
<!-- dato es un array que trae los cambios de la db. historico de cambios-->
<h4>Historico de cambios <span class="text-danger">{{$historialCambios[0]->empleado}}</span></h4>


<table class="table ">
  <thead class="table-dark">
    <tr>
      
      <th scope="col">Fecha modificacion </th>
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
    @foreach ($historialCambios as $historial)
    <tr>
    <td><span class="badge badge-success">{{$historial->fecha}}</span></td>
      <td>{{$historial->lunes}}<br><span class="badge badge-secondary">{{$historial->tareas_lunes}}</span></td>
      <td>{{$historial->martes}}<br><span class="badge badge-secondary">{{$historial->tareas_martes}}</span></td>
      <td>{{$historial->miercoles}}<br><span class="badge badge-secondary">{{$historial->tareas_miercoles}}</span></td>
      <td>{{$historial->jueves}}<br><span class="badge badge-secondary">{{$historial->tareas_jueves}}</span></td>
      <td>{{$historial->viernes}}<br><span class="badge badge-secondary">{{$historial->tareas_viernes}}</span></td>
      <td>{{$historial->sabado}}<br><span class="badge badge-secondary">{{$historial->tareas_sabado}}</span></td>
      <td>{{$historial->domingo}}<br><span class="badge badge-secondary">{{$historial->tareas_domingo}}</span></td>
    </tr>
  
    @endforeach


   
  </tbody>
</table>
<a class="btn btn-warning mr-2 text-white" href="{{route('gestion.index')}}">Volver</a>
@endsection