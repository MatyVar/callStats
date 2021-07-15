@extends('layouts.app')

@section('content')


<!--<h2 class="text-center mb-5">Mi Personal</h2>-->
<div class="col-md-50 mx-auto bg-ligth ">
    <div class="container">




        @if(count($notas) == 0)
        <h2><img src="{{asset('/img/sentiment_dissatisfied_black_24dp.svg')}}" style="width: 100px; opacity: 0.2;" alt="">No se encontraron notas...</h2>
        <a class="btn btn-secondary mr-2 mt-5" href="{{route('gestion.index')}}">Volver</a>
        <button class="btn btn-primary  text-white mt-5" data-toggle="modal" data-target="#exampleModal"> crear nueva nota</button>
        <!-- Modal -->
        <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nueva nota</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <form action="{{route('gestion.addNote',['nombre'=>$operador])}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name">Motivo:</label>
                                <select name="titulo" class="form-control" id="">
                                    <option value="Gestiones incorrectas">Gestiones incorrectas</option>
                                    <option value="Llegadas tarde">Llegadas tarde</option>
                                    <option value="Queja cliente">Queja cliente</option>
                                    <option value="Distinción cliente">Distinción cliente</option>
                                    <option value="horas a favor">Horas a favor</option>
                                    <option value="horas en contra">Horas en contra</option>
                                    <option value="Ausencias">Ausencias</option>
                                    <option value="Otros">Otros</option>
                                    <option value="Faltas a las normas">Faltas a las normas</option>
                                    <option value="Faltas procedimientos">Faltas procedimientos</option>
                                    <option value="Inconvenientes con el sistema">Inconvenientes con el sistema</option>

                                </select>
                            </div>
                           Autofinalizar? <input type="checkbox" name="autofinalizar">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Descripcion:</label>
                                <textarea class="form-control" id="message-text" name="nota"></textarea>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>

        @else
    </div>

    <table class="table table-bordered table-sm">
        <tbody>
            <thead class="">
                <th>Causa</th>
                <th>Fecha de registro</th>
                <th>Detalle</th>
                <th>vigencia</th>
                <th>Eliminar</th>
            </thead>
            @foreach ($notas as $nota)
            <tr>
                <td><b>{{$nota->titulo}}</b></td>
                <td><span class="font-weight-bold">{{$nota->fecha}}</span></td>

                <td>


                    @if($nota->vigencia =='si')
                    <a class="btn btn-success" href="{{route('gestion.verNote',['id'=>$nota->id])}}"><img src="{{asset('img\visibility_white_24dp.svg')}}" alt=""></a>
                    @else
                    <a class="btn btn-secondary" href="{{route('gestion.verNote',['id'=>$nota->id])}}"><img src="{{asset('img\visibility_white_24dp.svg')}}" alt=""></a>
                    @endif
                    <!-- <a class="text-dark" href="{{route('gestion.verNote',['id'=>$nota->id])}}">{{$nota->nota}}</a>-->


                </td>
                @if($nota->vigencia =='si' && $nota->titulo != 'horas a favor' )
              <!-- <td><a class="btn btn-success" onclick="return finalizarVigencia()" href="{{route('gestion.finalizarVigencia',$nota->id)}}">finalizar vigencia</a></td> -->
                <td><a class="btn btn-success" onclick="return finalizarVigencia()" href="{{route('gestion.finalizarNote',['id'=>$nota->id])}}">Finalizar</a></td>
                @else
                @if($nota->vigencia =='si' && $nota->titulo == 'horas a favor' )
                <td><a class="btn btn-success" onclick="return finalizarVigencia()" href="{{route('gestion.finalizarNote',['id'=>$nota->id])}}">compensar</a></td>
                @else
                @if($nota->titulo == 'horas a favor')
                <td><i>cumplido</i> <img src="{{asset('img/check.svg')}}" style="width: 20px;" alt=""></td>
                @else
                <td><i>Finalizado</i></td>
                @endif



                @endif

                @endif








                <td><a class="btn btn-danger" onclick="return eliminarEmpleado()" href="{{route('gestion.delNote',['id'=>$nota->id])}}"><img src="{{asset('img\delete_white_24dp.svg')}}" alt=""></a></td>

            </tr>

            @endforeach
            <script>
                function eliminarEmpleado() {
                    let res = confirm('realmente quiere eliminar el item seleccionado?');
                    if (res) {
                        return true;
                    } else {
                        return false;
                    }
                }

                function finalizarVigencia() {
                    let res = confirm('al finalizar vigencia, la nota no aparecera en las estadisticas, significa que ya fue cumplida');
                    if (res) {
                        return true;
                    } else {
                        return false;
                    }
                }
            </script>
        </tbody>
    </table>
    <a class="btn btn-secondary mr-2 mt-5" href="{{route('gestion.index')}}">Volver</a>
    <button class="btn btn-warning  text-white mt-5 " data-toggle="modal" data-target="#exampleModal"> crear nueva nota</button>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva nota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('gestion.addNote',['nombre'=>$nota->nombre])}}" method="POST">
                    @csrf
                    <div class="form-group" id="modalNotas">
                        <label for="recipient-name">Motivo:</label>
                        <select name="titulo" class="form-control" id="tiposDeNota">
                            <option value="Gestiones incorrectas">Gestiones incorrectas</option>
                            <option value="Llegadas tarde">Llegadas tarde</option>
                            <option value="Queja cliente">Queja cliente</option>
                            <option value="Distinción cliente">Distinción cliente</option>
                            <option value="horas a favor">Horas a favor</option>
                            <option value="horas en contra">Horas en contra</option>
                            <option value="Ausencias">Ausencias</option>
                            <option value="Otros">Otros</option>
                            <option value="Faltas a las normas">Faltas a las normas</option>
                            <option value="Faltas procedimientos">Faltas procedimientos</option>
                            <option value="Inconvenientes con el sistema">Inconvenientes con el sistema</option>

                        </select>
                    </div>
                    Autofinalizar? <input type="checkbox" name="autofinalizar">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nota:</label>
                        <textarea class="form-control" id="message-text" name="nota"></textarea>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>

        </div>
    </div>
</div>



@endif



<script src="{{asset('js/registrosNotasApp.js')}}"></script>

@endsection