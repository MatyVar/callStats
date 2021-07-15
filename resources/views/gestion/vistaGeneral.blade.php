@extends('layouts.app')

@section('content')
<div class="container-fluid" style="font-size: 14px;">
    <!--pendiente: agregar funcion a los operadores por dia cuando se crean, para luego incluir que tareas hace ese operador ese día-->
    <h4 class="badge badge-warning">Atención</h4>
    <table class="table table-bordered table-sm">
        <thead>
            <tr class="table-warning ">
                <th scope="col">TURNO MAÑANA</th>
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

                @if($data->turno=='mañana')
                <td> <b>{{$data->nombre}}</b></td>

                @if( $data->lunes == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->lunes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_lunes}}</span></td>

                @else
                <td> <b>{{$data->lunes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_lunes}}</span></td>
                @endif
                @if( $data->martes == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->martes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_martes}}</span></td>

                @else
                <td> <b>{{$data->martes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_martes}}</span></td>
                @endif

                @if( $data->miercoles == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->miercoles}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_miercoles}}</span></td>

                @else
                <td> <b>{{$data->miercoles}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_miercoles}}</span></td>
                @endif

                @if( $data->jueves == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->jueves}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_jueves}}</span></td>

                @else
                <td> <b>{{$data->jueves}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_jueves}}</span></td>
                @endif

                @if( $data->viernes == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->viernes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_viernes}}</span></td>

                @else
                <td> <b>{{$data->viernes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_viernes}}</span></td>
                @endif

                @if( $data->sabado == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->sabado}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_sabado}}</span></td>

                @else
                <td> <b>{{$data->sabado}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_sabado}}</span></td>
                @endif

                @if( $data->domingo == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->domingo}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_domingo}}</span></td>

                @else
                <td> <b>{{$data->domingo}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_domingo}}</span></td>
                @endif

                @endif



            </tr>

            @endforeach

        </tbody>
    </table>
    <table class="table  table-bordered table-sm">
        <thead>
            <tr class="table-danger  ">
                <th scope="col">TURNO TARDE</th>
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
                @if($data->turno=='tarde')
                <td> <b>{{$data->nombre}}</b></td>

                @if( $data->lunes == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->lunes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_lunes}}</span></td>

                @else
                <td> <b>{{$data->lunes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_lunes}}</span></td>
                @endif
                @if( $data->martes == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->martes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_martes}}</span></td>

                @else
                <td> <b>{{$data->martes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_martes}}</span></td>
                @endif

                @if( $data->miercoles == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->miercoles}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_miercoles}}</span></td>

                @else
                <td> <b>{{$data->miercoles}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_miercoles}}</span></td>
                @endif

                @if( $data->jueves == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->jueves}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_jueves}}</span></td>

                @else
                <td> <b>{{$data->jueves}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_jueves}}</span></td>
                @endif

                @if( $data->viernes == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->viernes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_viernes}}</span></td>

                @else
                <td> <b>{{$data->viernes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_viernes}}</span></td>
                @endif

                @if( $data->sabado == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->sabado}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_sabado}}</span></td>

                @else
                <td> <b>{{$data->sabado}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_sabado}}</span></td>
                @endif

                @if( $data->domingo == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->domingo}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_domingo}}</span></td>

                @else
                <td> <b>{{$data->domingo}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_domingo}}</span></td>
                @endif
                @endif


            </tr>

            @endforeach

        </tbody>
    </table>


    <hr class="bg-secondary">
    <!-- Monitoreo-->
    <h4 class="badge badge-dark">Monitoreo</h4>
    <table class="table table-bordered table-sm ">
        <thead>
            <tr class="table-success">
                <th scope="col">MONITOREO<b></th>
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
                @if($data->turno=='noche')
                <td> <b>{{$data->nombre}}</b></td>

                @if( $data->lunes == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->lunes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_lunes}}</span></td>

                @else
                <td> <b>{{$data->lunes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_lunes}}</span></td>
                @endif
                @if( $data->martes == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->martes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_martes}}</span></td>

                @else
                <td> <b>{{$data->martes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_martes}}</span></td>
                @endif

                @if( $data->miercoles == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->miercoles}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_miercoles}}</span></td>

                @else
                <td> <b>{{$data->miercoles}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_miercoles}}</span></td>
                @endif

                @if( $data->jueves == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->jueves}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_jueves}}</span></td>

                @else
                <td> <b>{{$data->jueves}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_jueves}}</span></td>
                @endif

                @if( $data->viernes == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->viernes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_viernes}}</span></td>

                @else
                <td> <b>{{$data->viernes}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_viernes}}</span></td>
                @endif

                @if( $data->sabado == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->sabado}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_sabado}}</span></td>

                @else
                <td> <b>{{$data->sabado}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_sabado}}</span></td>
                @endif

                @if( $data->domingo == 'FRANCO')
                <td class="bg-secondary"> <b>{{$data->domingo}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_domingo}}</span></td>

                @else
                <td> <b>{{$data->domingo}} </b><br><span class="badge badge-ligth text-secondary">{{$data->tareas_domingo}}</span></td>
                @endif

                @endif
            </tr>

            @endforeach

        </tbody>
    </table>

    <script>

    </script>
    <a class="btn btn-secondary mr-2 mt-5" href="{{route('gestion.index')}}">Volver</a>
</div>
@endsection
