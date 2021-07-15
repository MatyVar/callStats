@extends('layouts.app')

@section('content')



<table class="table">
    <thead>
      <tr>
 

        <th scope="col">Fecha del llamado</th>
        <th scope="col">cola</th>
        <th scope="col">Link planilla</th>
        <th scope="col">Supervisor realiza</th>
        <th scope="col">Realizado el</th>
        <th scope="col">Puntaje</th>

        <!--agregar color a los puntajes dependiendo del valor que tengan-->
       


        
      </tr>
    </thead>
    <tbody>
        @foreach ($puntajes as $puntaje )
      <tr>       
     
    
        
        <td>{{$puntaje->fechaRegistro}}</td>
        <td>{{$puntaje->cola}}</td>
        <td><a href="{{$puntaje->link_planilla}}">{{$puntaje->link_planilla}}</a></td>
        <td>{{$puntaje->supervisor}}</td>
        <td>{{$puntaje->realizado_el}}</td>
        <td>{{$puntaje->puntaje}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  


@endsection
