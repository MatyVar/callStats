@extends('layouts.app')

@section('content')
<!--pendiente: agregar funcion a los operadores por dia cuando se crean, para luego incluir que tareas hace ese operador ese día-->
<h4>Atención</h4>
<table class="table table-bordered">
    <thead>
        <tr class="table-success">
            <th scope="col"></th>
            <th scope="col">Lunes</th>
            <th scope="col">Martes</th>
            <th scope="col">Miercoles</th>
            <th scope="col">Jueves</th>
            <th scope="col">Viernes</th>
            <th scope="col">Sabados</th>
            <th scope="col">Domingos</th>
        </tr>
    </thead>
    <tbody>

        @foreach($result as $data)

        <tr>
         @if($data->categoria=='112' || $data->categoria=='BackOffice' || $data->categoria=='777' || $data->categoria=='112/777' || $data->categoria=='112/777/Monitoreo/BackOffice' || $data->categoria=='112/777/BackOffice' || $data->categoria=='112/777/Monitoreo')
           
         <td><b> {{$data->nombre}}</b></td>
         <td> <b>{{$data->lunes}}</b><br><span class="badge badge-dark">{{$data->tareas_lunes}}</span></td>
         <td> <b>{{$data->martes}} </b><br><span class="badge badge-dark">{{$data->tareas_martes}}</span></td>
         <td> <b>{{$data->miercoles}} </b><br><span class="badge badge-dark">{{$data->tareas_miercoles}}</span></td>
         <td> <b>{{$data->jueves}} </b><br><span class="badge badge-dark">{{$data->tareas_jueves}}</span></td>
         <td> <b>{{$data->viernes}} </b><br><span class="badge badge-dark">{{$data->tareas_viernes}}</span></td>
         <td> <b>{{$data->sabado}} </b><br><span class="badge badge-dark">{{$data->tareas_sabado}}</span></td>
         <td> <b>{{$data->domingo}}</b><br><span class="badge badge-dark">{{$data->tareas_domingo}}</span></td>
             
         @endif
        </tr>

        @endforeach

    </tbody>
</table>


<!-- Monitoreo-->
<h4>Monitoreo</h4>
<table class="table table-bordered">
    <thead>
        <tr class="table-success">
            <th scope="col"><b></th>
            <th scope="col"><b>Lunes</b></th>
            <th scope="col"><b>Martes</b></th>
            <th scope="col"><b>Miercoles</b></th>
            <th scope="col"><b>Jueves</b></th>
            <th scope="col"><b>Viernes</b></th>
            <th scope="col"><b>Sabados</b></th>
            <th scope="col"><b>Domingos</b></th>
        </tr>
    </thead>
    <tbody>

        @foreach($result as $data)

        <tr>
         @if($data->categoria=='Monitoreo')
           
         <td><b> {{$data->nombre}}</b></td>
         <td> <b>{{$data->lunes}}</b></td>
         <td> <b>{{$data->martes}} </b></td>
         <td> <b>{{$data->miercoles}} </b></td>
         <td> <b>{{$data->jueves}} </b></td>
         <td> <b>{{$data->viernes}} </b></td>
         <td> <b>{{$data->sabado}} </b></td>
         <td> <b>{{$data->domingo}}</b></td>
             
         @endif
        </tr>

        @endforeach

    </tbody>
</table>

<script>

</script>
<a class="btn btn-secondary mr-2 mt-5" href="{{route('gestion.index')}}">Volver</a>
@endsection