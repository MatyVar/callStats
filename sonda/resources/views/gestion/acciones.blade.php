@extends('layouts.app')



@section('content')
<h4 class="text-secondary"><i>{{$operador->nombre}}</i></h4>
<h3>Se registra compensacion de feriado trabajado:</h3>
<form action="{{route('gestion.compensar')}}" method="POST">
  @method('POST')
@csrf
<select class="form-control" name="diaCompensatorio" id="" required>
   
    @foreach ($fechas as $fecha )
    <option class="form-control" value="{{$fecha}}">{{$fecha}}</option>   
      
    @endforeach
  
</select>
<h3 class="mt-2">Dia:</h3>
<input class="form-control" type="date" name="compensaDia" required>
<input type="text" value="{{$operador->nombre}}" hidden name="operadorNombre">
<a class="btn btn-secondary mr-2 mt-5" href="{{route('gestion.index')}}">Volver</a>
<button class="btn btn-success mr-2 mt-5" type="submit">Guardar</button>
</form>
@endsection

<!--aca se realiza la llamada a una accion mediante una ruta por post, y -->

