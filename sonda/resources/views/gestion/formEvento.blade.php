@extends('layouts.app')

@section('content')
<div style="height: 600px"  class="container bg-ligth">
    
<form class="form-group" method="POST" action="{{route('gestion.asignarFeriado')}}">
    @csrf
    <h4>Seleccionar personas </h4>
    <select style="height: 400px" name="listadoOperadores[]" class="form-select form-control " multiple aria-label="multiple select example">
      
        @foreach ($operadores as $operador)
        <option value="{{$operador->nombre}}">{{$operador->nombre}}</option>
        @endforeach
        </select>
        <label for="feriado">Registrar feriado a trabajar/trabajado:</label>
        <input type="date" name="feriado" class="form-control">
        
        <a class="btn btn-secondary mr-2 mt-5" href="{{route('gestion.index')}}">Volver</a>
        <button class="btn btn-success mt-5" type="submit">Asignar</button>
        
    
     
        </form>
    
</div>
@endsection


