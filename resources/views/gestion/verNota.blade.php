@extends('layouts.app')

@section('content')


<body onload="modal()" class="bg-ligth">
  <!-- Button trigger modal -->


  <button type="button" id="modalss" hidden class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title" id="exampleModalLongTitle"><b>{{$titulo}}</b> #{{$noteId}}</p>

        </div>
        <div class="modal-body">
          <b class="mt-2">Descripción: </b><br>{{$contenido}}
          @if($descripcionFin[0]!='')
          <div class="mt-5 modal-footer alert alert-success" role="alert">
          <b>Finalizado</b>
          
          </div>
          <div class="alert alert-success" role="alert">
          
          <p><b class="mt-2" >Descripcion: </b>{{$descripcionFin[0]}}<b><br>Se finalizó : </b>{{$fechaFin[0]}}</p>
          </div>
        @else
        <div class="mt-5 modal-footer alert alert-warning" role="alert">
         <p class="mt-2">Nota aun pendiente </b>
        </div>
          @endif
        </div>



        <div class="modal-footer">
          <button type="button" onclick="back()" class="btn btn-primary text-white" data-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>

  <script>
    function modal() {
      let btn = document.getElementById('modalss');
      btn.click() = true;
    }

    modal();

    function back() {
      history.back();
    }
  </script>
</body>

@endsection