@extends('layouts.app')


@section('content')

<table class="table table-striped table-sm table-bordered text-center">
    <thead >
      <tr class="table-warning">
        <th scope="col"><img src="{{asset('img/support_agent_black_24dp.svg')}}" alt=""><span class="badge badge-primary">Cantidad de Agentes totales por hora</span></th>
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
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  07:00 a 08:00</th>
        @foreach ($de7a8 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
     
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  08:00 a 09:00</th>
        @foreach ($de8a9 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  09:00 a 10:00</th>
        @foreach ($de9a10 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  10:00 a 11:00</th>
        @foreach ($de10a11 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  11:00 a 12:00</th>
        @foreach ($de11a12 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  12:00 a 13:00</th>
        @foreach ($de12a13 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  13:00 a 14:00</th>
        @foreach ($de13a14 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  14:00 a 15:00</th>
        @foreach ($de14a15 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  15:00 a 16:00</th>
        @foreach ($de15a16 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  16:00 a 17:00</th>
        @foreach ($de16a17 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  17:00 a 18:00</th>
        @foreach ($de17a18 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  18:00 a 19:00</th>
        @foreach ($de18a19 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  19:00 a 20:00</th>
        @foreach ($de19a20 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  20:00 a 21:00</th>
        @foreach ($de20a21 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
      <tr>
        <th scope="row"><img src="{{asset('img//schedule_black_24dp.svg')}}" alt="">  21:00 a 22:00</th>
        @foreach ($de21a22 as $cantidad)
        <td>{{$cantidad-1}}</td>
        @endforeach
      </tr>
  
    </tbody>
  </table>
  <a class="btn btn-danger mr-2" href="{{route('gestion.index')}}">Volver</a>
@endsection