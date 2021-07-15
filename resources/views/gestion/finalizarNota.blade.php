@extends('layouts.app')

@section('content')

@foreach($query as $datos)
<div class="card bg-gradient-dark ">

    <div class="card-header">
        <b>Fecha: </b>{{$datos->fecha}}<br>
        <b>Empleado: </b>{{$datos->nombre}}
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <b>Detalle de supervision:</b>
            <p>{{$datos->nota}}</p>

        </blockquote>
    </div>
</div>

@endforeach

<!-- falta toda esta parte. -->
<form action="{{route('gestion.finalizarNotaConDetalle')}}"  class="form-group">
@csrf
    <h5 class="mt-2"><b>Descripcion de la finalizacion:</b></h5>
    <input type="number" name="id" hidden value="{{$id}}">
    <textarea class="form-control" name="descripcion" id="" cols="30" rows="10">
    

</textarea>
    <button class="btn btn-success" type="submit">Guardar </button>
</form>

@endsection