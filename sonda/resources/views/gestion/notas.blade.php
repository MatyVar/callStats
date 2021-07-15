@extends('layouts.app')

@section('content')


<!--<h2 class="text-center mb-5">Mi Personal</h2>-->
<div class="col-md-50 mx-auto bg-ligth ">
<div class="container">



                
      @if(count($notas) == 0)
       <h2>No se encontraron notas</h2>;
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
                        <label for="recipient-name" class="col-form-label">Titulo:</label>
                        <input type="text" class="form-control" id="recipient-name" name="titulo">
                    </div>
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
 
      @else
    </div>
   
    <table class="table">
        <tbody>
            <thead class="bg-dark text-white">
                <th>TITULO</th>
                <th>NOTA</th>
            <th>FECHA REGISTRO</th>
            <th>ELIMINAR</th>
            </thead>
            @foreach ($notas as $nota)
            <tr>
                <td><b>{{$nota->titulo}}</b></td>
                <td>
                  
 
                    <a class="" href="{{route('gestion.verNote',['id'=>$nota->id])}}"  >Ver</a>
                </td>
                <td><span class="font-weight-bold">{{$nota->fecha}}</span></td>
               <td><a class="btn btn-danger" href="{{route('gestion.delNote',['id'=>$nota->id])}}">x</a></td>
            </tr>
 
            @endforeach
            
        </tbody>
    </table>
    <a class="btn btn-secondary mr-2 mt-5" href="{{route('gestion.index')}}">Volver</a>
    <button class="btn btn-primary  text-white mt-5 " data-toggle="modal" data-target="#exampleModal"> crear nueva nota</button>
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
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Titulo:</label>
                        <input type="text" class="form-control" id="recipient-name" name="titulo">
                    </div>
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
            
    
   


    



@endsection