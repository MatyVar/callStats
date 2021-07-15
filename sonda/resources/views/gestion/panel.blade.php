@extends('layouts.app')

@section('content')

<!--<h2 class="text-center mb-5">Mi Personal</h2>-->
<div class="col-md-50 mx-auto bg-ligth ">
    <table class="table">
        <thead class="bg-secondary text-ligth">
            <tr>
                <th class="text-white" scole="col">Nombre</th>
                <th class="text-white" scole="col">Categoria</th>
                <th class="text-white" scole="col">Opciones</th>
            </tr>

        </thead>
        <tbody>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script src="{{asset('js/jquery.js')}}"></script>
            @foreach ($operadores as $operador)
            <tr>
                <td><b>{{$operador->nombre}}</b></td>
                <td><b>{{$operador->categoria}}</b></td>
                <td>
                    <!--
                    <a href="{{route('gestion.show', ['operador'=>$operador->id])}}" class="badge badge-success text-white ">Ver</a>
                    <a href="{{route('gestion.edit', ['operador'=>$operador->id])}}" class="badge text-white "  style="background-color: #416BEC">Editar</a>
                    <a href="{{route('gestion.notas', ['operador'=>$operador->id])}}" class=" badge badge-warning text-white " >Notas</a>                   
                    <a href="{{route('gestion.acciones', ['operador'=>$operador->id])}}" class=" badge text-white "  style="background-color: #63224f">Compensación</a>
                    <a href="{{route('gestion.historico', ['operador'=>$operador->id])}}" class=" badge text-white "  style="background-color: #63224f">Historico</a>
                    <a href="{{route('gestion.destroy', ['operador'=>$operador->id])}}" class="badge badge-danger">Eliminar</a>
                    -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                      
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class=" dropdown-toggle btn " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Seleccionar
                                </a>
    
                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a href="{{route('gestion.show', ['operador'=>$operador->id])}}" class="dropdown-item">Ver</a>
                                    <a href="{{route('gestion.edit', ['operador'=>$operador->id])}}" class="dropdown-item">Editar</a>
                                    <a href="{{route('gestion.notas', ['operador'=>$operador->id])}}" class="dropdown-item " >Notas</a>                   
                                    <a href="{{route('gestion.acciones', ['operador'=>$operador->id])}}" class="dropdown-item ">Registrar compensacion</a>
                                    <a href="{{route('gestion.historico', ['operador'=>$operador->id])}}" class="dropdown-item ">Historico</a>
                                    <a href="{{route('gestion.destroy', ['operador'=>$operador->id])}}" onclick="return eliminarEmpleado()" class="dropdown-item">Eliminar</a>
                                   
                                  
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </td>
             
            </tr>

            @endforeach
         
           <script>
               function eliminarEmpleado(){
                   let res = confirm('realmente quiere eliminar el item seleccionado?');
                   if(res){
                       return true;
                   }else{
                       return false;
                   }
               }
           </script>
        </tbody>
    </table>
    <hr>
</div>

@endsection

