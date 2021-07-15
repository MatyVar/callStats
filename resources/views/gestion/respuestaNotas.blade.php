@extends('layouts.app')

@section('content')
<h4><b>Notas entre el {{$fechaInicio}} y {{$fechaFin}}</b></h4>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">TIPO</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">FECHA DE REGISTRO</th>
            <th scope="col">CONTENIDO</th>
            <th scope="col">ESTADO</th>
            <th scope="col">FINALIZO VIGENCIA</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($resultadosNotas as $resultado)
        <!--
<div class="card">
  <div class="card-header">
 {{$resultado->fecha}}
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$resultado->nota}}</p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
-->

        @if($resultado->vigencia =='si')

        <tr>
            <th style="background-color: #ffe4e4;" scope="row">{{$resultado->titulo}}</th>
            <td style="background-color: #ffe4e4;">{{$resultado->nombre}}</td>
           @if($resultado->titulo == 'Ausencias')
           <td style="background-color: #ffe4e4;">{{$resultado->fechaAusencia}} (Fecha de la ausencia)</td>
          @else
          <td style="background-color: #ffe4e4;">{{$resultado->fecha}}</td>
           @endif
            <td style="background-color: #ffe4e4;">{{$resultado->nota}}</td>
            <td style="background-color: #ffe4e4;">VIGENTE</td>
            <td style="background-color: #ffe4e4;"><i>aun vigente</i></td>
            
            
        </tr>
        @else
        <tr>
            <th style="background-color: #beffac;" scope="row">{{$resultado->titulo}}</th>
            <td style="background-color: #beffac;">{{$resultado->nombre}}</td>
            <td style="background-color: #beffac;">{{$resultado->fecha}}</td>
            <td style="background-color: #beffac;">{{$resultado->nota}}</td>
            <td style="background-color: #beffac;">NO VIGENTE</td>
            <td style="background-color: #beffac;"><b>{{$resultado->finVigencia}}</b> - {{$resultado->descripcionFin}}</td>
            
        </tr>
        @endif

        @endforeach
    </tbody>
</table>
<a class="btn btn-warning mr-2 text-white" href="{{route('gestion.index')}}">Volver</a>
@endsection