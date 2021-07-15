@extends('layouts.app')


@section('content')
<form method="post" action="{{route('gestion.store')}}">
    @csrf
    <div class="form-group">
        <h4 class="text-warning">Completar ficha</h4>
        <label class="font-weight-bold" for="legajo">Legajo</label>

        <input type="text" name="legajo" class="form-control" id="nombre" placeholder="legajo...">

        <label class="font-weight-bold" for="nombre">Nombre del Operador</label>

        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre del operador/a...">

        @error('nombre')
        <p class="text-danger">El nombre no puede tener menos de 3 caracteres, estar vacio o contender numeros ni caracteres especiales. </p>
        @enderror

        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="" class="form-control">
                <option value="">Seleccione categoria...</option>
                @foreach ($categorias as $id=>$categoria)
                <option value="{{$categoria->record}}" {{old('categoria') == $categoria->record ? 'selected':''}}>{{$categoria->record}}</option>
                @endforeach
            </select>
            @error('categoria')
            <p class="text-danger">Debe seleccionar una categoria. </p>
            @enderror
        </div>
    </div>
    <label class="font-weight-bold" for="supervisor">Supervisor a cargo:</label>

    <select name="supervisor" id="" class="select form-control">
        <option value="#">Seleccionar...</option>
        <option value="Matias Gasañol">Matias Gasañol</option>
        <option value="Patricia Perez">Patricia Perez</option>
        <option value="Micaela Nogues">Micaela Nogues</option>
        <option value="Karina Rios">Karina Rios</option>
        <option value="Florencia Montenegro">Florencia Montenegro</option>
        <option value="Etelvina Castillo">Etelvina Castillo</option>
    </select>
    
    <label class="font-weight-bold" for="turno">Turno:</label>

    <select name="turno" id="turno" class="select form-control">
    <option value="mañana">Mañana</option>
    <option value="tarde">Tarde</option>
    <option value=noche>Noche</option>
    
    </select>

    <span class="font-weight-bold">Horario lunes:</span>
    <select  class="select form-control" aria-label="Default select example" name="lunes" id="">
    @foreach($horarios as $horario )
        <option class="form-control" value="{{$horario->horarios}}">{{$horario->horarios}}</option>
    @endforeach
    </select>
    <span class="font-weight-bold">Tareas Lunes:</span>
    <select class="form-control" name="tareas_lunes" id="">
        <option value="Monitoreo">Monitoreo</option>
        <option value="Backoffice">Backoffice</option>
        <option value="Atencion 777/112">Atencion 777/112</option>
        <option value="Backoffice y Atencion telefónica">Backoffice y Atencion telefónica</option>
        <option value="112">112</option>
        <option value="777">777</option>
        <option value="Campaña">Campaña</option>
        <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
        <option value="FRANCO">FRANCO</option>
        
        
    </select>
    <span class="font-weight-bold">Horario martes:</span>
    <select class="form-control" aria-label="Default select example" name="martes" id="">
    @foreach($horarios as $horario )
        <option class="form-control" value="{{$horario->horarios}}">{{$horario->horarios}}</option>
    @endforeach
    </select>
    <span class="font-weight-bold">Tareas Martes:</span>
    <select class="form-control" name="tareas_martes" id="">
        <option value="Monitoreo">Monitoreo</option>
        <option value="Backoffice">Backoffice</option>
        <option value="Atencion 777/112">Atencion 777/112</option>
        <option value="Backoffice y Atencion telefónica">Backoffice y Atencion telefónica</option>
        <option value="112">112</option>
        <option value="777">777</option>
        <option value="Campaña">Campaña</option>
        <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
        <option value="FRANCO">FRANCO</option>
        
        
    </select>
    <span class="font-weight-bold">Horario miercoles:</span>
    <select class="form-control" aria-label="Default select example" name="miercoles" id="">
    @foreach($horarios as $horario )
        <option class="form-control" value="{{$horario->horarios}}">{{$horario->horarios}}</option>
    @endforeach
    </select>
    <span class="font-weight-bold">Tareas Miercoles:</span>
    <select class="form-control" name="tareas_miercoles" id="">
        <option value="Monitoreo">Monitoreo</option>
        <option value="Backoffice">Backoffice</option>
        <option value="Atencion 777/112">Atencion 777/112</option>
        <option value="Backoffice y Atencion telefónica">Backoffice y Atencion telefónica</option>
        <option value="112">112</option>
        <option value="777">777</option>
        <option value="Campaña">Campaña</option>
        <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
        <option value="FRANCO">FRANCO</option>
        
        
    </select>
    <span class="font-weight-bold">Horario jueves:</span>
    <select class="form-control" aria-label="Default select example" name="jueves" id="">
    @foreach($horarios as $horario )
        <option class="form-control" value="{{$horario->horarios}}">{{$horario->horarios}}</option>
    @endforeach
    </select>
    <span class="font-weight-bold">Tareas Jueves:</span>
    <select class="form-control" name="tareas_jueves" id="">
        <option value="Monitoreo">Monitoreo</option>
        <option value="Backoffice">Backoffice</option>
        <option value="Atencion 777/112">Atencion 777/112</option>
        <option value="Backoffice y Atencion telefónica">Backoffice y Atencion telefónica</option>
        <option value="112">112</option>
        <option value="777">777</option>
        <option value="Campaña">Campaña</option>
        <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
        <option value="FRANCO">FRANCO</option>
        
        
    </select>
    <span class="font-weight-bold">Horario viernes:</span>
    <select class="form-control" aria-label="Default select example" name="viernes" id="">
    @foreach($horarios as $horario )
        <option class="form-control" value="{{$horario->horarios}}">{{$horario->horarios}}</option>
    @endforeach
    </select>
    <span class="font-weight-bold">Tareas viernes:</span>
    <select class="form-control" name="tareas_viernes" id="">
        <option value="Monitoreo">Monitoreo</option>
        <option value="Backoffice">Backoffice</option>
        <option value="Atencion 777/112">Atencion 777/112</option>
        <option value="Backoffice y Atencion telefónica">Backoffice y Atencion telefónica</option>
        <option value="112">112</option>
        <option value="777">777</option>
        <option value="Campaña">Campaña</option>
        <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
        <option value="FRANCO">FRANCO</option>
        
        
    </select>
    <span class="font-weight-bold">Horario sabado:</span>
    <select class="form-control" aria-label="Default select example" name="sabado" id="">
    @foreach($horarios as $horario )
        <option class="form-control" value="{{$horario->horarios}}">{{$horario->horarios}}</option>
    @endforeach
    </select>
    <span class="font-weight-bold">Tareas Sabado:</span>
    <select class="form-control" name="tareas_sabado" id="">
        <option value="Monitoreo">Monitoreo</option>
        <option value="Backoffice">Backoffice</option>
        <option value="Atencion 777/112">Atencion 777/112</option>
        <option value="Backoffice y Atencion telefónica">Backoffice y Atencion telefónica</option>
        <option value="112">112</option>
        <option value="777">777</option>
        <option value="Campaña">Campaña</option>
        <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
        <option value="FRANCO">FRANCO</option>
        
        
    </select>
    <span class="font-weight-bold">Horario domingo:</span>
    <select class="form-control" aria-label="Default select example" name="domingo" id="">
    @foreach($horarios as $horario )
        <option class="form-control" value="{{$horario->horarios}}">{{$horario->horarios}}</option>
    @endforeach
    </select>
    <span class="font-weight-bold">Tareas Domingo:</span>
    <select class="form-control" name="tareas_domingo" id="">
        <option value="Monitoreo">Monitoreo</option>
        <option value="Backoffice">Backoffice</option>
        <option value="Atencion 777/112">Atencion 777/112</option>
        <option value="Backoffice y Atencion telefónica">Backoffice y Atencion telefónica</option>
        <option value="112">112</option>
        <option value="777">777</option>
        <option value="Campaña">Campaña</option>
        <option value="Campaña y Atencion telefónica">Campaña y Atencion telefónica</option>
        <option value="FRANCO">FRANCO</option>
        
        
    </select>





    <div class="form-group">
        <a class="btn btn-secondary mr-2 mt-3" href="{{route('gestion.index')}}">Volver</a>
        <input type="submit" class="btn btn-success  mt-3" value="Agregar Operador">



    </div>
</form>


@endsection