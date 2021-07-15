@extends('layouts.app')

@section('content')





<table class="table table-sm table-bordered" >
    <thead class="bg-warning text-white">
        <tr>
            <th scope="col">Turno mañana</th>
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
        @foreach ($empleados as $empleado)
        <tr>
            @if($empleado->turno =='mañana')
            <td><b>{{$empleado->nombre}}</b></td>
            <td><select> @foreach($horarios as $horario )
                    <option value="{{$horario->horarios}}" {{$empleado->lunes == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                    @endforeach
                </select></td>
            <td><select> @foreach($horarios as $horario )
                    <option value="{{$horario->horarios}}" {{$empleado->martes == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                    @endforeach
                </select></td>
            <td><select> @foreach($horarios as $horario )
                    <option value="{{$horario->horarios}}" {{$empleado->miercoles == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                    @endforeach
                </select></td>
            <td><select> @foreach($horarios as $horario )
                    <option value="{{$horario->horarios}}" {{$empleado->jueves == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                    @endforeach
                </select></td>
            <td><select> @foreach($horarios as $horario )
                    <option value="{{$horario->horarios}}" {{$empleado->viernes == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                    @endforeach
                </select></td>
            <td><select> @foreach($horarios as $horario )
                    <option value="{{$horario->horarios}}" {{$empleado->sabado == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                    @endforeach
                </select></td>
            <td><select> @foreach($horarios as $horario )
                    <option value="{{$horario->horarios}}" {{$empleado->domingo == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                    @endforeach
                </select></td>
        </tr>
        @endif
        @endforeach


        <table class="table table-sm table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">Turno tarde</th>
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
                @foreach ($empleados as $empleado)
                <tr>
                    @if($empleado->turno =='tarde')
                    <td><b>{{$empleado->nombre}}</b></td>
                    <td><select class="lunes"> @foreach($horarios as $horario )
                            <option value="{{$horario->horarios}}" {{$empleado->lunes == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                            @endforeach
                        </select></td>
                    <td><select> @foreach($horarios as $horario )
                            <option value="{{$horario->horarios}}" {{$empleado->martes == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                            @endforeach
                        </select></td>
                    <td><select> @foreach($horarios as $horario )
                            <option value="{{$horario->horarios}}" {{$empleado->miercoles == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                            @endforeach
                        </select></td>
                    <td><select> @foreach($horarios as $horario )
                            <option value="{{$horario->horarios}}" {{$empleado->jueves == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                            @endforeach
                        </select></td>
                    <td><select> @foreach($horarios as $horario )
                            <option value="{{$horario->horarios}}" {{$empleado->viernes == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                            @endforeach
                        </select></td>
                    <td><select> @foreach($horarios as $horario )
                            <option value="{{$horario->horarios}}" {{$empleado->sabado == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                            @endforeach
                        </select></td>
                    <td><select> @foreach($horarios as $horario )
                            <option value="{{$horario->horarios}}" {{$empleado->domingo == $horario->horarios ? 'selected':''}}>{{$horario->horarios}}</option>
                            @endforeach
                        </select></td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
<script>

function color(){
    let prueba=document.getElementsByClassName("lunes");
    
    for(var i=0;i<prueba.length;i++){
        //alert();
        if(prueba[i].options.value=='14:00 a 22:00')
        prueba[i].options.background='red';
    }
}

color();
</script>


        @endsection