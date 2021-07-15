@extends('layouts.app')

@section('content')

<body onload="modal()">
    <!-- Button trigger modal -->
<button type="button" id="modalss" hidden class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade bg-secondary" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLongTitle">{{$titulo}}</h4>
         
        </div>
        <div class="modal-body">
         {{$contenido}}
        </div>
        <div class="modal-footer">
          <button type="button" onclick="back()" class="btn btn-warning text-white" data-dismiss="modal">Ok!</button>
     
        </div>
      </div>
    </div>
  </div>

  <script>
      function modal(){
          let btn = document.getElementById('modalss');
          btn.click()=true;
      }

      modal();

      function back(){
        history.back();
      }
  </script>
</body>

@endsection