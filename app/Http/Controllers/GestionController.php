<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database\Seeders\operador;
use Illuminate\Support\Facades\DB;
use App\Models\CategoriaOperadores;
use function GuzzleHttp\Promise\all;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Database\Seeders\CategoriaOperador;
use Illuminate\Support\Facades\Redirect;
use App\Models\Operador as ModelsOperador;



use PHPUnit\Framework\Constraint\Operator;
use Symfony\Component\VarDumper\VarDumper;

class GestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('auth.login');
    }

    public function entrada($string)
    {
        return substr($string, 5);
    }

    public function panel()
    {

        //$operadores = Auth::user()->operadores;
        $operadores = DB::select('select * from operadors');
        $nombresNotas = DB::select('select * from nombresNotas');
        $supervisores = DB::select('select * from supervisores');
     
        $de7a15=array(
            "lunes"=>0,
            "martes"=>0,
            "miercoles"=>0,
            "jueves"=>0,
            "viernes"=>0,
            "sabado"=>0,
            "domingo"=>0
        );
        $de7a14=array(
            "lunes"=>0,
            "martes"=>0,
            "miercoles"=>0,
            "jueves"=>0,
            "viernes"=>0,
            "sabado"=>0,
            "domingo"=>0
        );
        $de8a15=array(
            "lunes"=>0,
            "martes"=>0,
            "miercoles"=>0,
            "jueves"=>0,
            "viernes"=>0,
            "sabado"=>0,
            "domingo"=>0
        );

        $de8a16=array(
            "lunes"=>0,
            "martes"=>0,
            "miercoles"=>0,
            "jueves"=>0,
            "viernes"=>0,
            "sabado"=>0,
            "domingo"=>0
        ); 
        $de9a13=array(
            "lunes"=>0,
            "martes"=>0,
            "miercoles"=>0,
            "jueves"=>0,
            "viernes"=>0,
            "sabado"=>0,
            "domingo"=>0
        );
        
        $de9a16=array(
            "lunes"=>0,
            "martes"=>0,
            "miercoles"=>0,
            "jueves"=>0,
            "viernes"=>0,
            "sabado"=>0,
            "domingo"=>0
        );
        $de10a18=array(
            "lunes"=>0,
            "martes"=>0,
            "miercoles"=>0,
            "jueves"=>0,
            "viernes"=>0,
            "sabado"=>0,
            "domingo"=>0
        );
        $de14a22 = array(
            "lunes"=>0,
            "martes"=>0,
            "miercoles"=>0,
            "jueves"=>0,
            "viernes"=>0,
            "sabado"=>0,
            "domingo"=>0
        );

               
        foreach($operadores as $operador){
            if($operador->lunes == '07:00 a 15:00' ){
                $de7a15['lunes']++; 
            }
            if($operador->martes == '07:00 a 15:00' ){
                $de7a15['martes']++; 
            }
            if($operador->miercoles == '07:00 a 15:00' ){
                $de7a15['miercoles']++; 
            }
            if($operador->jueves == '07:00 a 15:00' ){
                $de7a15['jueves']++; 
            }
            if($operador->viernes == '07:00 a 15:00' ){
                $de7a15['viernes']++; 
            }
            if($operador->sabado == '07:00 a 15:00' ){
                $de7a15['sabado']++; 
            }
            if($operador->domingo == '07:00 a 15:00' ){
                $de7a15['domingo']++; 
            }

            if($operador->lunes == '07:00 a 14:00' ){
                $de7a14['lunes']++; 
            }
            if($operador->martes == '07:00 a 14:00' ){
                $de7a14['martes']++; 
            }
            if($operador->miercoles == '07:00 a 14:00' ){
                $de7a14['miercoles']++; 
            }
            if($operador->jueves == '07:00 a 14:00' ){
                $de7a14['jueves']++; 
            }
            if($operador->viernes == '07:00 a 14:00' ){
                $de7a14['viernes']++; 
            }
            if($operador->sabado == '07:00 a 14:00' ){
                $de7a14['sabado']++; 
            }
            if($operador->domingo == '07:00 a 14:00' ){
                $de7a14['domingo']++; 
            }

               if($operador->lunes == '08:00 a 16:00' ){
                $de8a16['lunes']++; 
            }
            if($operador->martes == '08:00 a 16:00' ){
                $de8a16['martes']++; 
            }
            if($operador->miercoles == '08:00 a 16:00' ){
                $de8a16['miercoles']++; 
            }
            if($operador->jueves == '08:00 a 16:00' ){
                $de8a16['jueves']++; 
            }
            if($operador->viernes == '08:00 a 16:00' ){
                $de8a16['viernes']++; 
            }
            if($operador->sabado == '08:00 a 16:00' ){
                $de8a16['sabado']++; 
            }
            if($operador->domingo == '08:00 a 16:00' ){
                $de8a16['domingo']++; 
            }


            if($operador->lunes == '08:00 a 15:00' ){
                $de8a15['lunes']++; 
            }
            if($operador->martes == '08:00 a 15:00' ){
                $de8a15['martes']++; 
            }
            if($operador->miercoles == '08:00 a 15:00' ){
                $de8a15['miercoles']++; 
            }
            if($operador->jueves == '08:00 a 15:00' ){
                $de8a15['jueves']++; 
            }
            if($operador->viernes == '08:00 a 15:00' ){
                $de8a15['viernes']++; 
            }
            if($operador->sabado == '08:00 a 15:00' ){
                $de8a15['sabado']++; 
            }
            if($operador->domingo == '08:00 a 15:00' ){
                $de8a15['domingo']++; 
            }

            if($operador->lunes == '09:00 a 13:00' ){
                $de9a13['lunes']++; 
            }
            if($operador->martes == '09:00 a 13:00' ){
                $de9a13['martes']++; 
            }
            if($operador->miercoles == '09:00 a 13:00' ){
                $de9a13['miercoles']++; 
            }
            if($operador->jueves == '09:00 a 13:00' ){
                $de9a13['jueves']++; 
            }
            if($operador->viernes == '09:00 a 13:00' ){
                $de9a13['viernes']++; 
            }
            if($operador->sabado == '09:00 a 13:00' ){
                $de9a13['sabado']++; 
            }
            if($operador->domingo == '09:00 a 13:00' ){
                $de9a13['domingo']++; 
            }

            if($operador->lunes == '09:00 a 16:00' ){
                $de9a16['lunes']++; 
            }
            if($operador->martes == '09:00 a 16:00' ){
                $de9a16['martes']++; 
            }
            if($operador->miercoles == '09:00 a 16:00' ){
                $de9a16['miercoles']++; 
            }
            if($operador->jueves == '09:00 a 16:00' ){
                $de9a16['jueves']++; 
            }
            if($operador->viernes == '09:00 a 16:00' ){
                $de9a16['viernes']++; 
            }
            if($operador->sabado == '09:00 a 16:00' ){
                $de9a16['sabado']++; 
            }
            if($operador->domingo == '09:00 a 16:00' ){
                $de9a16['domingo']++; 
            }

            
            if($operador->lunes == '10:00 a 18:00' ){
                $de10a18['lunes']++; 
            }
            if($operador->martes == '10:00 a 18:00' ){
                $de10a18['martes']++; 
            }
            if($operador->miercoles == '10:00 a 18:00' ){
                $de10a18['miercoles']++; 
            }
            if($operador->jueves == '10:00 a 18:00' ){
                $de10a18['jueves']++; 
            }
            if($operador->viernes == '10:00 a 18:00' ){
                $de10a18['viernes']++; 
            }
            if($operador->sabado == '10:00 a 18:00' ){
                $de10a18['sabado']++; 
            }
            if($operador->domingo == '10:00 a 18:00' ){
                $de10a18['domingo']++; 
            }

            if($operador->lunes == '14:00 a 22:00' ){
                $de14a22['lunes']++; 
            }
            if($operador->martes == '14:00 a 22:00' ){
                $de14a22['martes']++; 
            }
            if($operador->miercoles == '14:00 a 22:00' ){
                $de14a22['miercoles']++; 
            }
            if($operador->jueves == '14:00 a 22:00' ){
                $de14a22['jueves']++; 
            }
            if($operador->viernes == '14:00 a 22:00' ){
                $de14a22['viernes']++; 
            }
            if($operador->sabado == '14:00 a 22:00' ){
                $de14a22['sabado']++; 
            }
            if($operador->domingo == '14:00 a 22:00' ){
                $de14a22['domingo']++; 
            }
        }

        return view('gestion.panel')->with('operadores', $operadores)->with('nombresNotas', $nombresNotas)->with('supervisores', $supervisores)->with('de7a15',$de7a15)->with('de7a14',$de7a14)->with('de8a15',$de8a15)->with('de8a16',$de8a16)->with('de9a13',$de9a13)->with('de9a16',$de9a16)->with('de10a18',$de10a18)->with('de14a22',$de14a22);
        //return substr($operadores[0]->lunes,8);
        //return $de14a22['viernes'];
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //con este metodo hago un select a la tabla determinada en la db.
        //DB::table('categoria_operador')->get()->pluck('nombre','id')->dd();

        // $categorias= DB::table('categoria_operador')->get()->pluck('record');

        $horarios = DB::select('select horarios from horarios');
        $operadores = DB::select('select * from operadors');
        $categorias = CategoriaOperadores::all(['id', 'record']);

        return view('gestion.create')->with('categorias', $categorias)->with('operadores', $operadores)->with('horarios', $horarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //defino las reglas de validacion
        $operadores = DB::select('select * from operadors');

        $data = request()->validate([
            'nombre' => 'required|min:3',
            'categoria' => 'required',

        ]);


        DB::table('operadors')->insert([
            'nombre' => $data['nombre'],
            'categoria' => $data['categoria'],
            'user_id' => Auth::user()->id,
            'lunes' => $request['lunes'],
            'martes' => $request['martes'],
            'miercoles' => $request['miercoles'],
            'jueves' => $request['jueves'],
            'viernes' => $request['viernes'],
            'sabado' => $request['sabado'],
            'domingo' => $request['domingo'],
            'tareas_lunes' => $request['tareas_lunes'],
            'tareas_martes' => $request['tareas_martes'],
            'tareas_miercoles' => $request['tareas_miercoles'],
            'tareas_jueves' => $request['tareas_jueves'],
            'tareas_viernes' => $request['tareas_viernes'],
            'tareas_sabado' => $request['tareas_sabado'],
            'tareas_domingo' => $request['tareas_domingo'],
            'legajo' => $request['legajo'],
            'supervisor' => $request['supervisor'],
            'turno' => $request['turno'],

        ]);

        DB::table('stamparoles')->insert([
            'empleado' => $data['nombre'],


            'lunes' => $request['lunes'],
            'martes' => $request['martes'],
            'miercoles' => $request['miercoles'],
            'jueves' => $request['jueves'],
            'viernes' => $request['viernes'],
            'sabado' => $request['sabado'],
            'domingo' => $request['domingo'],
            'tareas_lunes' => $request['tareas_lunes'],
            'tareas_martes' => $request['tareas_martes'],
            'tareas_miercoles' => $request['tareas_miercoles'],
            'tareas_jueves' => $request['tareas_jueves'],
            'tareas_viernes' => $request['tareas_viernes'],
            'tareas_sabado' => $request['tareas_sabado'],
            'tareas_domingo' => $request['tareas_domingo'],


        ]);

        //redireccionamos para que no nos lleve por post y nos deje en una pagina en blanco
        return redirect()->action('GestionController@panel')->with('operadores', $operadores);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsOperador $operador)
    {
        $operadores = DB::select('select * from operadors');
        $operadorName = $operador->nombre;
        $fechas = array();
        $fechasCompensadas = array();
        $fechasCompensadas2 = array();
        $historialCambiosArr = array();
        $compensados = array();
        $notas = DB::select("select * from notas where nombre='$operador->nombre' ORDER BY fecha DESC");


        $user = DB::table('feriados_trabajados')->where('operador', $operadorName)->pluck('fecha');
        $compensacion = DB::table('feriados_compensados')->where('operador', $operadorName)->pluck('feriado_compensado');
        $compensacion2 = DB::table('feriados_compensados')->where('operador', $operadorName)->pluck('fecha');
        $compensado = DB::table('feriados_trabajados')->where('operador', $operadorName)->pluck('compensado');
        $historialCambios = DB::select("select * from stamparoles where empleado = '$operadorName'");

        foreach ($user as $valor) {
            array_push($fechas, $valor);
        }



        foreach ($compensacion as $valor) {
            array_push($fechasCompensadas, $valor);
        }

        foreach ($compensacion2 as $valor) {
            array_push($fechasCompensadas2, $valor);
        }
        foreach ($historialCambios as $historial) {
            array_push($historialCambiosArr, $historial);
        }
        foreach ($compensado as $compensado) {
            array_push($compensados, $compensado);
        }

        return view('gestion.show')->with('operador', $operador)->with('fechas', $fechas)->with('fechasCompensadas', $fechasCompensadas)->with('fechasCompensadas2', $fechasCompensadas2)->with('historialCambios', $historialCambiosArr)->with('compensados', $compensados)->with('operadores', $operadores)->with('notas', $notas);
    }

    public function mostrarHistorico(ModelsOperador $operador)
    {

        $operadorName = $operador->nombre;
        $historialCambiosArr = array();

        $historialCambios = DB::select("select * from stamparoles where empleado = '$operadorName'");



        foreach ($historialCambios as $historial) {
            array_push($historialCambiosArr, $historial);
        }

        return view('gestion.historico')->with('historialCambios', $historialCambiosArr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsOperador  $operador)

    {
        $idDelOperador = $operador->id;

        $query = DB::select("select * from operadors where id = '$idDelOperador'");

        $arrayOperador = array();

        foreach ($query as $info) {
            array_push($arrayOperador, $info);
        }




        $categorias = CategoriaOperadores::all(['id', 'record']);
        $horarios = DB::select('select horarios from horarios');
        //comento la linea de abajo para hacer pruebas de return con los valores que ya tiene el operador.
        return view('gestion.edit', compact('categorias', 'operador'))->with('informacion', $arrayOperador)->with('horarios', $horarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validacion

        $data = $request->validate([
            'nombre' => 'required | min:3',
            'categoria' => 'required',

        ]);
        // actualizacion
        DB::table('operadors')
            ->where('id', $id)
            ->update([
                'nombre' => $data['nombre'],
                'categoria' => $data['categoria'],
                'lunes' => $request['lunes'],
                'martes' => $request['martes'],
                'miercoles' => $request['miercoles'],
                'jueves' => $request['jueves'],
                'viernes' => $request['viernes'],
                'sabado' => $request['sabado'],
                'domingo' => $request['domingo'],
                'supervisor' => $request['supervisor'],
                'tareas_lunes' => $request['tareas_lunes'],
                'tareas_martes' => $request['tareas_martes'],
                'tareas_miercoles' => $request['tareas_miercoles'],
                'tareas_jueves' => $request['tareas_jueves'],
                'tareas_viernes' => $request['tareas_viernes'],
                'tareas_sabado' => $request['tareas_sabado'],
                'tareas_domingo' => $request['tareas_domingo'],
                'turno' => $request['turno'],

            ]);
        DB::table('stamparoles')
            ->where('id', $id)
            ->insert([
                'empleado' => $data['nombre'],

                'lunes' => $request['lunes'],
                'martes' => $request['martes'],
                'miercoles' => $request['miercoles'],
                'jueves' => $request['jueves'],
                'viernes' => $request['viernes'],
                'sabado' => $request['sabado'],
                'domingo' => $request['domingo'],
                'tareas_lunes' => $request['tareas_lunes'],
                'tareas_martes' => $request['tareas_martes'],
                'tareas_miercoles' => $request['tareas_miercoles'],
                'tareas_jueves' => $request['tareas_jueves'],
                'tareas_viernes' => $request['tareas_viernes'],
                'tareas_sabado' => $request['tareas_sabado'],
                'tareas_domingo' => $request['tareas_domingo'],


            ]);

        //redireccion
        return redirect()->action('GestionController@panel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //ejecutar el policy
        // $this->authorize('delete',$id);


        DB::table('operadors')
            ->where('id', $id)
            ->delete();

        //redireccion
        return redirect()->action('GestionController@panel');
    }


    //revisa si el usuario autenticado es el que creo el operador.
    public function delete(User $user, Operador $operador)
    {

        return $user->id === $operador->user_id;
    }

    public function formEvent()
    {
        $operadores = DB::select('SELECT * FROM operadors');


        return view('gestion.formEvento')->with('operadores', $operadores);
    }

    //trato esta funcion como si fuera el php que recibe el post.falta crear la base de datos
    public function asignarFeriado()
    {
        $feriado = $_POST['feriado'];
        $operadores = $_POST['listadoOperadores'];
        for ($var = 0; $var < count($operadores); $var++) {
            $operador = $operadores[$var];
            DB::update("update operadors set diasAFavor = diasAFavor+1 where nombre = '$operador'");
            DB::update("update operadors set feriadosTrabajados = feriadosTrabajados+1 where nombre = '$operador'");
            //DB::insert('insert into feriados_trabajados (operador, fecha) values ('$operador', '$feriado')');
            DB::table('feriados_trabajados')->insert(
                [
                    'operador' => $operador,
                    'fecha' => $feriado,
                ]

            );
        }
        return redirect()->action('GestionController@panel');
        //me falta hacer que cuando se agrega un feriado, se sume un numero a los feriados trabajados pero en la tabla del operador.
    }

    public function acciones(ModelsOperador $operador)
    {

        $operadorName = $operador->nombre;
        $fechas = array();

        $compensoSioNo = array();


        $user = DB::table('feriados_trabajados')->where('operador', $operadorName)->where('compensado', 'no')->pluck('fecha');


        foreach ($user as $valor) {
            array_push($fechas, $valor);
        }



        return view('gestion.acciones')->with('operador', $operador)->with('fechas', $fechas);
    }

    public function compensar()
    {
        $feriadoQueCompensa = $_POST['diaCompensatorio']; //borrar 1 valor a dias a favor
        $diaQueEligeCompensar = $_POST['compensaDia'];
        $operador = $_POST['operadorNombre'];


        DB::table('feriados_compensados')->insert(
            [
                'operador' => $operador,
                'fecha' => $diaQueEligeCompensar,
                'feriado_compensado' => $feriadoQueCompensa,
            ]

        );
        DB::update("update operadors set diasAFavor = diasAFavor-1 where nombre = '$operador'");
        DB::update("update operadors set feriados_compensados = feriados_compensados+1 where nombre = '$operador'");
        DB::update("update feriados_trabajados set compensado = 'si' where operador = '$operador' and fecha = '$feriadoQueCompensa' ");

        return redirect()->action('GestionController@panel');
    }

    public function vistaHorarios()
    {




        $datos =  DB::select('SELECT * FROM operadors');

        $result = array();

        foreach ($datos as $dato) {
            array_push($result, $dato);
        }





        return view('gestion.vistaGeneral')->with('result', $result);
    }

    public function notes(ModelsOperador $operador)
    {
        $notasDe = $operador->nombre;
        $datosArray = array();


        $datos = DB::select("SELECT * FROM notas where nombre='$notasDe'");
        //nombre de la variable/contenido de la variable.
        foreach ($datos as $dato) {
            array_push($datosArray, $dato);
        }


        return view('gestion.notas')->with('notas', $datosArray)->with('operador', $notasDe);
    }
    public function addNote(Request $request)
    {
        $fecha = '';
        $nombre = $request->nombre;
        $nota = $request['nota'];
        $finalizarCheck = $request['autofinalizar'];
        $titulo = $request['titulo'];
        $request;
        $vigencia;
        $descFin='';
        if($finalizarCheck =='on'){
            $vigencia ='no';
            $descFin = 'Finalizado automaticamente por sistema.';
        }else{
            $vigencia ='si';
        }
        if (isset($request['inputFecha'])) {
            $fecha = $request['inputFecha'];
            $request = "insert into notas (nombre,nota,titulo,fechaAusencia,vigencia,descripcionFin) values ('$nombre','$nota','$titulo','$fecha','$vigencia','$descFin')";
        } else {
            $request = "insert into notas (nombre,nota,titulo,vigencia,descripcionFin) values ('$nombre','$nota','$titulo','$vigencia','$descFin')";
        }



        DB::insert($request);
        return Redirect::back();
        //return $finalizarCheck;
    }

    public function verNote(Request $request)
    {
        $operadores = DB::select('select * from operadors');
        $noteId = $request->id;
        $user = DB::table('notas')->where('id', $noteId)->pluck('nota');
        $titulo = DB::table('notas')->where('id', $noteId)->pluck('titulo');
        $fechaNota = DB::table('notas')->where('id', $noteId)->pluck('fecha');
        $fechaFin = DB::table('notas')->where('id', $noteId)->pluck('finVigencia');
        $descripcionFin = DB::table('notas')->where('id', $noteId)->pluck('descripcionFin');



        return view('gestion.verNota')->with('contenido', $user[0])->with('titulo', $titulo[0])->with('noteId', $noteId)->with('fechaNota', $fechaNota)->with('operadores', $operadores)->with('descripcionFin', $descripcionFin)->with('fechaFin', $fechaFin);
    }
    public function delNote(Request $request)
    {
        $noteId = $request->id;
        DB::table('notas')
            ->where('id', $noteId)
            ->delete();

        return Redirect::back();
    }


    public function finalizarNote(Request $id)
    {
        $noteId = $id['id'];
        $query = DB::select("select * from notas where id= '$noteId'");
        return view('gestion.finalizarNota')->with('query', $query)->with('id', $noteId);
    }
    public function finalizarNotaConDetalle(Request $request)
    {
        $url = $request['id'];

        DB::table('notas')
            ->where('id', $request['id'])
            ->update([
                'vigencia' => 'no',
                'finVigencia' => getdate()['year'] . '-' . getdate()['mon'] . '-' . getdate()['mday'],
                'descripcionFin' => $request['descripcion'],

            ]);


        return redirect('../registros');
    }



    public function coachingExpress()
    {
        return view('gestion.coachingXpress');
    }

    public function traerEscuchas($request)
    {
        $puntajes_escuchas = DB::select("select * from puntajes_escuchas where Agente= '$request'");


        return view('gestion.escuchas')->with('puntajes', $puntajes_escuchas);
    }

    public function deleteFecha($fecha, $operador)
    {

        DB::table('feriados_trabajados')
            ->where('fecha', $fecha)
            ->where('operador', $operador)
            ->delete();

        DB::update("update operadors set diasAFavor = diasAFavor-1 where nombre = '$operador'");
        DB::update("update operadors set feriadosTrabajados = feriadosTrabajados-1 where nombre = '$operador'");



        return Redirect::back();
    }



    public function estadisticas()
    {

        return $_POST['nombre'];
    }

    public function finalizarVigencia($id)
    {
        $noteId = $id;

        DB::table('notas')
            ->where('id', $noteId)
            ->update([
                'vigencia' => 'no',
                'finVigencia' => getdate()['year'] . '-' . getdate()['mon'] . '-' . getdate()['mday'],

            ]);

        return Redirect::back();
    }



    public function recolectarNotas()
    {
        //traigo los valores de los campos, realizo la consulta.
        $tipoNota = $_POST['tipo'];
        $fechaInicio = $_POST['inicio'];
        $fechaFin = $_POST['fin'];
        $listaOperadores = $_POST['listadoOperadores'];
        $resultadosNotas = array();

        //querys se modifica de acuerdo a lo que se consulte, es decir el tipo de ticket.

        if ($tipoNota == 'todas') {
            $querys = DB::select("SELECT * FROM notas WHERE fecha >= '$fechaInicio' and fecha <= '$fechaFin' ORDER BY fecha DESC;");
        } else {
            $querys = DB::select("SELECT * FROM notas WHERE fecha >= '$fechaInicio' and fecha <= '$fechaFin' and titulo='$tipoNota' ORDER BY fecha DESC;");
        }

        if ($tipoNota == 'Ausencias') {
            $querys = DB::select("SELECT * FROM notas WHERE fechaAusencia >= '$fechaInicio' and fecha <= '$fechaFin' and titulo='$tipoNota' ORDER BY fecha DESC;");
        }

        for ($var = 0; $var < count($listaOperadores); $var++) {
            foreach ($querys as $query) {
                if ($listaOperadores[$var] == $query->nombre) {
                    array_push($resultadosNotas, $query);
                }
            }
        }

        return view('gestion.respuestaNotas')->with('resultadosNotas', $resultadosNotas)->with('fechaInicio', $fechaInicio)->with('fechaFin', $fechaFin);


        //falta retornar la view, con el array $querys que contiene el jason armado de la consulta

    }

    public function armar()
    {
        $horarios = DB::select('select horarios from horarios');
        $empleados = DB::select("select * from operadors");
        return view('gestion.armar')->with('empleados', $empleados)->with('horarios', $horarios);
    }

    //reportes

    public function reportes()
    {
        return view('gestion.reportes');
    }

    public function consultarStats(Request $request)
    {
        $noEsta = false;
        $fecha = $request['fecha'];
        $empleados = DB::select("select * from operadors");
        $registros = DB::select("SELECT * FROM reports.registros WHERE fecha='$fecha';");
        if (count($registros) == 0) {
            $noEsta = true;
        }
        $entrantes = DB::select("SELECT * FROM reporting.answered_calls_by_agent WHERE fechaRegistro='$fecha';");
        $salientes = DB::select("SELECT * FROM reporting.answered_calls_by_agent_salientes WHERE fechaRegistro='$fecha';");
        $holdtime = DB::select("SELECT * FROM reporting.holdtime WHERE fechaRegistro='$fecha';");
        $pausas = DB::select("SELECT * FROM reporting.pauses_horizontal WHERE fechaRegistro='$fecha';");
        return view('gestion.stats')->with('pausas', $pausas)->with('holdtime', $holdtime)->with('salientes', $salientes)->with('entrantes', $entrantes)->with('empleados', $empleados)->with('noEsta', $noEsta)->with('fecha', $fecha);
    }

    public function consultarStatsRange(Request $request)
    {
        $noEsta = false;
        $inicio = $request['inicio'];
        $fin = $request['fin'];

        $registros = DB::select("SELECT * FROM reports.registros WHERE  fecha >= '$inicio' and fecha <= '$fin';");

        return view('gestion.statsRange')->with('registros', $registros);
    }
    public function consultarStatsRangeVPlan(Request $request)
    {
        $noEsta = false;
        $inicio = $request['inicio'];
        $fin = $request['fin'];

        $registros = DB::select("SELECT * FROM reports.registros WHERE  fecha >= '$inicio' and fecha <= '$fin';");

        return view('gestion.statsRangeVPlan')->with('registros', $registros);
    }

    public function insertReporte()
    {
        $array = $_POST['data'];
        return $array;
    }

    public function fichadas($request)
    {
        $legajo = $request;
        return view('gestion.fichero')->with('legajo', $legajo);
    }

    public function operadoresPorHora(){
        $operadores = DB::select("select * from operadors");

        $de7a8 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de8a9 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de9a10 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de10a11 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de11a12 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de12a13 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de13a14 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de14a15 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de15a16 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de16a17 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de17a18 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de18a19 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de19a20 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de20a21 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);
        $de21a22 = array("lunes"=>0,"martes"=>0,"miercoles"=>0,"jueves"=>0,"viernes"=>0,"sabado"=>0,"domingo"=>0);

        foreach($operadores as $horario){
            if($horario->lunes == '07:00 a 14:00' || $horario->lunes == '07:00 a 15:00'  ){
                $de7a8['lunes']++; 
            }
            if($horario->martes == '07:00 a 14:00' || $horario->martes == '07:00 a 15:00'  ){
                $de7a8['martes']++; 
            }
            if($horario->miercoles == '07:00 a 14:00' || $horario->miercoles == '07:00 a 15:00'  ){
                $de7a8['miercoles']++; 
            }
            if($horario->jueves == '07:00 a 14:00' || $horario->jueves == '07:00 a 15:00'  ){
                $de7a8['jueves']++; 
            }
            if($horario->viernes == '07:00 a 14:00' || $horario->viernes == '07:00 a 15:00'  ){
                $de7a8['viernes']++; 
            } 
            if($horario->sabado == '07:00 a 14:00' || $horario->sabado == '07:00 a 15:00'  ){
                $de7a8['sabado']++; 
            }
            if($horario->domingo == '07:00 a 14:00' || $horario->domingo == '07:00 a 15:00'  ){
                $de7a8['domingo']++; 
            }

            /////////////////////////////////////////////////////////////////////////////////////////////

            if($horario->lunes == '07:00 a 14:00' || $horario->lunes == '07:00 a 15:00' ||
             $horario->lunes == '08:00 a 12:00' || $horario->lunes == '08:00 a 16:00' || $horario->lunes == '08:00 a 15:00' ){
                $de8a9['lunes']++; 
            }
            if($horario->martes == '07:00 a 14:00' || $horario->martes == '07:00 a 15:00' ||
             $horario->martes == '08:00 a 12:00' || $horario->martes == '08:00 a 16:00' || $horario->martes == '08:00 a 15:00' ){
                $de8a9['martes']++; 
            }
            if($horario->miercoles == '07:00 a 14:00' || $horario->miercoles == '07:00 a 15:00' ||
             $horario->miercoles == '08:00 a 12:00' || $horario->miercoles == '08:00 a 16:00' || $horario->miercoles == '08:00 a 15:00' ){
                $de8a9['miercoles']++; 
            }
            if($horario->jueves == '07:00 a 14:00' || $horario->jueves == '07:00 a 15:00' ||
             $horario->jueves == '08:00 a 12:00' || $horario->jueves == '08:00 a 16:00' || $horario->jueves == '08:00 a 15:00' ){
                $de8a9['jueves']++; 
            }
            if($horario->viernes == '07:00 a 14:00' || $horario->viernes == '07:00 a 15:00' ||
             $horario->viernes == '08:00 a 12:00' || $horario->viernes == '08:00 a 16:00' || $horario->viernes == '08:00 a 15:00' ){
                $de8a9['viernes']++; 
            }
            if($horario->sabado == '07:00 a 14:00' || $horario->sabado == '07:00 a 15:00' ||
            $horario->sabado == '08:00 a 12:00' || $horario->sabado == '08:00 a 16:00' || $horario->sabado == '08:00 a 15:00' ){
               $de8a9['sabado']++; 
            }
            if($horario->domingo == '07:00 a 14:00' || $horario->domingo == '07:00 a 15:00' ||
            $horario->domingo == '08:00 a 12:00' || $horario->domingo == '08:00 a 16:00' || $horario->domingo == '08:00 a 15:00' ){
              $de8a9['domingo']++; 
            }
          

            /////////////////////////////////////////////////////////////////////////////////////////

            if($horario->lunes == '07:00 a 14:00' || $horario->lunes == '07:00 a 15:00' ||
            $horario->lunes == '08:00 a 12:00' || $horario->lunes == '08:00 a 16:00' || $horario->lunes == '08:00 a 15:00'
            || $horario->lunes == '09:00 a 13:00' || $horario->lunes == '09:00 a 16:00' ){
               $de9a10['lunes']++; 
            }
            if($horario->martes == '07:00 a 14:00' || $horario->martes == '07:00 a 15:00' ||
            $horario->martes == '08:00 a 12:00' || $horario->martes == '08:00 a 16:00' || $horario->martes == '08:00 a 15:00'
            || $horario->martes == '09:00 a 13:00' || $horario->martes == '09:00 a 16:00' ){
               $de9a10['martes']++; 
            }
            if($horario->miercoles == '07:00 a 14:00' || $horario->miercoles == '07:00 a 15:00' ||
            $horario->miercoles == '08:00 a 12:00' || $horario->miercoles == '08:00 a 16:00' || $horario->miercoles == '08:00 a 15:00'
            || $horario->miercoles == '09:00 a 13:00' || $horario->miercoles == '09:00 a 16:00' ){
               $de9a10['miercoles']++; 
            }
            if($horario->jueves == '07:00 a 14:00' || $horario->jueves == '07:00 a 15:00' ||
            $horario->jueves == '08:00 a 12:00' || $horario->jueves == '08:00 a 16:00' || $horario->jueves == '08:00 a 15:00'
            || $horario->jueves == '09:00 a 13:00' || $horario->jueves == '09:00 a 16:00' ){
               $de9a10['jueves']++; 
            }
            if($horario->viernes == '07:00 a 14:00' || $horario->viernes == '07:00 a 15:00' ||
            $horario->viernes == '08:00 a 12:00' || $horario->viernes == '08:00 a 16:00' || $horario->viernes == '08:00 a 15:00'
            || $horario->viernes == '09:00 a 13:00' || $horario->viernes == '09:00 a 16:00' ){
               $de9a10['viernes']++; 
            }
            if($horario->sabado == '07:00 a 14:00' || $horario->sabado == '07:00 a 15:00' ||
            $horario->sabado == '08:00 a 12:00' || $horario->sabado == '08:00 a 16:00' || $horario->sabado == '08:00 a 15:00'
            || $horario->sabado == '09:00 a 13:00' || $horario->sabado == '09:00 a 16:00' ){
               $de9a10['sabado']++; 
            }
            if($horario->domingo == '07:00 a 14:00' || $horario->domingo == '07:00 a 15:00' ||
            $horario->domingo == '08:00 a 12:00' || $horario->domingo == '08:00 a 16:00' || $horario->domingo == '08:00 a 15:00'
            || $horario->domingo == '09:00 a 13:00' || $horario->domingo == '09:00 a 16:00' ){
               $de9a10['domingo']++; 
            }
            //////////////////////////////////////////////////////////////////////////////////////
            if($horario->lunes == '07:00 a 14:00' || $horario->lunes == '07:00 a 15:00' ||
            $horario->lunes == '08:00 a 12:00' || $horario->lunes == '08:00 a 16:00' || $horario->lunes == '08:00 a 15:00'
            || $horario->lunes == '09:00 a 13:00' || $horario->lunes == '09:00 a 16:00'
            || $horario->lunes == '10:00 a 14:00' || $horario->lunes == '10:30 a 14:00'
            || $horario->lunes == '10:30 a 15:00' || $horario->lunes == '10:00 a 18:00' ){
               $de10a11['lunes']++; 
               $de11a12['lunes']++; 

            }
            if($horario->martes == '07:00 a 14:00' || $horario->martes == '07:00 a 15:00' ||
            $horario->martes == '08:00 a 12:00' || $horario->martes == '08:00 a 16:00' || $horario->martes == '08:00 a 15:00'
            || $horario->martes == '09:00 a 13:00' || $horario->martes == '09:00 a 16:00'
            || $horario->martes == '10:00 a 14:00' || $horario->martes == '10:30 a 14:00'
            || $horario->martes == '10:30 a 15:00' || $horario->martes == '10:00 a 18:00' ){
               $de10a11['martes']++; 
               $de11a12['martes']++; 
               
            }
            if($horario->miercoles == '07:00 a 14:00' || $horario->miercoles == '07:00 a 15:00' ||
            $horario->miercoles == '08:00 a 12:00' || $horario->miercoles == '08:00 a 16:00' || $horario->miercoles == '08:00 a 15:00'
            || $horario->miercoles == '09:00 a 13:00' || $horario->miercoles == '09:00 a 16:00'
            || $horario->miercoles == '10:00 a 14:00' || $horario->miercoles == '10:30 a 14:00'
            || $horario->miercoles == '10:30 a 15:00' || $horario->miercoles == '10:00 a 18:00' ){
               $de10a11['miercoles']++;
               $de11a12['miercoles']++; 
               
            }
            if($horario->jueves == '07:00 a 14:00' || $horario->jueves == '07:00 a 15:00' ||
            $horario->jueves == '08:00 a 12:00' || $horario->jueves == '08:00 a 16:00' || $horario->jueves == '08:00 a 15:00'
            || $horario->jueves == '09:00 a 13:00' || $horario->jueves == '09:00 a 16:00'
            || $horario->jueves == '10:00 a 14:00' || $horario->jueves == '10:30 a 14:00'
            || $horario->jueves == '10:30 a 15:00' || $horario->jueves == '10:00 a 18:00' ){
               $de10a11['jueves']++; 
               $de11a12['jueves']++; 
               
            }
            if($horario->viernes == '07:00 a 14:00' || $horario->viernes == '07:00 a 15:00' ||
            $horario->viernes == '08:00 a 12:00' || $horario->viernes == '08:00 a 16:00' || $horario->viernes == '08:00 a 15:00'
            || $horario->viernes == '09:00 a 13:00' || $horario->viernes == '09:00 a 16:00'
            || $horario->viernes == '10:00 a 14:00' || $horario->viernes == '10:30 a 14:00'
            || $horario->viernes == '10:30 a 15:00' || $horario->viernes == '10:00 a 18:00' ){
               $de10a11['viernes']++;
               $de11a12['viernes']++; 
               
            }
            if($horario->sabado == '07:00 a 14:00' || $horario->sabado == '07:00 a 15:00' ||
            $horario->sabado == '08:00 a 12:00' || $horario->sabado == '08:00 a 16:00' || $horario->sabado == '08:00 a 15:00'
            || $horario->sabado == '09:00 a 13:00' || $horario->sabado == '09:00 a 16:00'
            || $horario->sabado == '10:00 a 14:00' || $horario->sabado == '10:30 a 14:00'
            || $horario->sabado == '10:30 a 15:00' || $horario->sabado == '10:00 a 18:00' ){
               $de10a11['sabado']++; 
               $de11a12['sabado']++; 
               
            }
            if($horario->domingo == '07:00 a 14:00' || $horario->domingo == '07:00 a 15:00' ||
            $horario->domingo == '08:00 a 12:00' || $horario->domingo == '08:00 a 16:00' || $horario->domingo == '08:00 a 15:00'
            || $horario->domingo == '09:00 a 13:00' || $horario->domingo == '09:00 a 16:00'
            || $horario->domingo == '10:00 a 14:00' || $horario->domingo == '10:30 a 14:00'
            || $horario->domingo == '10:30 a 15:00' || $horario->domingo == '10:00 a 18:00' ){
               $de10a11['domingo']++;
               $de11a12['domingo']++; 
               
            }
            ///////////////////////////////////////////////////////////////////////////////////////////
            if($horario->lunes == '07:00 a 14:00' || $horario->lunes == '07:00 a 15:00' ||
             $horario->lunes == '08:00 a 16:00' || $horario->lunes == '08:00 a 15:00'
            || $horario->lunes == '09:00 a 13:00' || $horario->lunes == '09:00 a 16:00'
            || $horario->lunes == '10:00 a 14:00' || $horario->lunes == '10:30 a 14:00'
            || $horario->lunes == '10:30 a 15:00' || $horario->lunes == '10:00 a 18:00' ){
               $de12a13['lunes']++; 
            }
            if($horario->martes == '07:00 a 14:00' || $horario->martes == '07:00 a 15:00' ||
             $horario->martes == '08:00 a 16:00' || $horario->martes == '08:00 a 15:00'
            || $horario->martes == '09:00 a 13:00' || $horario->martes == '09:00 a 16:00'
            || $horario->martes == '10:00 a 14:00' || $horario->martes == '10:30 a 14:00'
            || $horario->martes == '10:30 a 15:00' || $horario->martes == '10:00 a 18:00' ){
               $de12a13['martes']++; 
            }
            if($horario->miercoles == '07:00 a 14:00' || $horario->miercoles == '07:00 a 15:00' ||
             $horario->miercoles == '08:00 a 16:00' || $horario->miercoles == '08:00 a 15:00'
            || $horario->miercoles == '09:00 a 13:00' || $horario->miercoles == '09:00 a 16:00'
            || $horario->miercoles == '10:00 a 14:00' || $horario->miercoles == '10:30 a 14:00'
            || $horario->miercoles == '10:30 a 15:00' || $horario->miercoles == '10:00 a 18:00' ){
               $de12a13['miercoles']++; 
            }
            if($horario->jueves == '07:00 a 14:00' || $horario->jueves == '07:00 a 15:00' ||
             $horario->jueves == '08:00 a 16:00' || $horario->jueves == '08:00 a 15:00'
            || $horario->jueves == '09:00 a 13:00' || $horario->jueves == '09:00 a 16:00'
            || $horario->jueves == '10:00 a 14:00' || $horario->jueves == '10:30 a 14:00'
            || $horario->jueves == '10:30 a 15:00' || $horario->jueves == '10:00 a 18:00' ){
               $de12a13['jueves']++; 
            }
            if($horario->viernes == '07:00 a 14:00' || $horario->viernes == '07:00 a 15:00' ||
             $horario->viernes == '08:00 a 16:00' || $horario->viernes == '08:00 a 15:00'
            || $horario->viernes == '09:00 a 13:00' || $horario->viernes == '09:00 a 16:00'
            || $horario->viernes == '10:00 a 14:00' || $horario->viernes == '10:30 a 14:00'
            || $horario->viernes == '10:30 a 15:00' || $horario->viernes == '10:00 a 18:00' ){
               $de12a13['viernes']++; 
            }
            if($horario->sabado == '07:00 a 14:00' || $horario->sabado == '07:00 a 15:00' ||
             $horario->sabado == '08:00 a 16:00' || $horario->sabado == '08:00 a 15:00'
            || $horario->sabado == '09:00 a 13:00' || $horario->sabado == '09:00 a 16:00'
            || $horario->sabado == '10:00 a 14:00' || $horario->sabado == '10:30 a 14:00'
            || $horario->sabado == '10:30 a 15:00' || $horario->sabado == '10:00 a 18:00' ){
               $de12a13['sabado']++; 
            }
            if($horario->domingo == '07:00 a 14:00' || $horario->domingo == '07:00 a 15:00' ||
             $horario->domingo == '08:00 a 16:00' || $horario->domingo == '08:00 a 15:00'
            || $horario->domingo == '09:00 a 13:00' || $horario->domingo == '09:00 a 16:00'
            || $horario->domingo == '10:00 a 14:00' || $horario->domingo == '10:30 a 14:00'
            || $horario->domingo == '10:30 a 15:00' || $horario->domingo == '10:00 a 18:00' ){
               $de12a13['domingo']++; 
            }
            ///////////////////////////////////////////////////////////////////////////////////
            if($horario->lunes == '07:00 a 14:00' || $horario->lunes == '07:00 a 15:00' ||
            $horario->lunes == '08:00 a 16:00' || $horario->lunes == '08:00 a 15:00'
            || $horario->lunes == '09:00 a 16:00' || $horario->lunes == '10:00 a 14:00' || $horario->lunes == '10:30 a 14:00'
            || $horario->lunes == '10:30 a 15:00' || $horario->lunes == '10:00 a 18:00' ){
              $de13a14['lunes']++; 
            }
            if($horario->martes == '07:00 a 14:00' || $horario->martes == '07:00 a 15:00' ||
            $horario->martes == '08:00 a 16:00' || $horario->martes == '08:00 a 15:00'
            || $horario->martes == '09:00 a 16:00' || $horario->martes == '10:00 a 14:00' || $horario->martes == '10:30 a 14:00'
            || $horario->martes == '10:30 a 15:00' || $horario->martes == '10:00 a 18:00' ){
              $de13a14['martes']++; 
            }
            if($horario->miercoles == '07:00 a 14:00' || $horario->miercoles == '07:00 a 15:00' ||
            $horario->miercoles == '08:00 a 16:00' || $horario->miercoles == '08:00 a 15:00'
            || $horario->miercoles == '09:00 a 16:00' || $horario->miercoles == '10:00 a 14:00' || $horario->miercoles == '10:30 a 14:00'
            || $horario->miercoles == '10:30 a 15:00' || $horario->miercoles == '10:00 a 18:00' ){
              $de13a14['miercoles']++; 
            }
            if($horario->jueves == '07:00 a 14:00' || $horario->jueves == '07:00 a 15:00' ||
            $horario->jueves == '08:00 a 16:00' || $horario->jueves == '08:00 a 15:00'
            || $horario->jueves == '09:00 a 16:00' || $horario->jueves == '10:00 a 14:00' || $horario->jueves == '10:30 a 14:00'
            || $horario->jueves == '10:30 a 15:00' || $horario->jueves == '10:00 a 18:00' ){
              $de13a14['jueves']++; 
            }
            if($horario->viernes == '07:00 a 14:00' || $horario->viernes == '07:00 a 15:00' ||
            $horario->viernes == '08:00 a 16:00' || $horario->viernes == '08:00 a 15:00'
            || $horario->viernes == '09:00 a 16:00' || $horario->viernes == '10:00 a 14:00' || $horario->viernes == '10:30 a 14:00'
            || $horario->viernes == '10:30 a 15:00' || $horario->viernes == '10:00 a 18:00' ){
              $de13a14['viernes']++; 
            }
            if($horario->sabado == '07:00 a 14:00' || $horario->sabado == '07:00 a 15:00' ||
            $horario->sabado == '08:00 a 16:00' || $horario->sabado == '08:00 a 15:00'
            || $horario->sabado == '09:00 a 16:00' || $horario->sabado == '10:00 a 14:00' || $horario->sabado == '10:30 a 14:00'
            || $horario->sabado == '10:30 a 15:00' || $horario->sabado == '10:00 a 18:00' ){
              $de13a14['sabado']++; 
            }
            if($horario->domingo == '07:00 a 14:00' || $horario->domingo == '07:00 a 15:00' ||
            $horario->domingo == '08:00 a 16:00' || $horario->domingo == '08:00 a 15:00'
            || $horario->domingo == '09:00 a 16:00' || $horario->domingo == '10:00 a 14:00' || $horario->domingo == '10:30 a 14:00'
            || $horario->domingo == '10:30 a 15:00' || $horario->domingo == '10:00 a 18:00' ){
              $de13a14['domingo']++; 
            }
            //////////////////////////////////////////////////////////////////////////////////////////

            if($horario->lunes == '07:00 a 15:00' || $horario->lunes == '08:00 a 16:00' || $horario->lunes == '08:00 a 15:00'
            || $horario->lunes == '09:00 a 16:00' || $horario->lunes == '10:30 a 15:00' || $horario->lunes == '10:00 a 18:00'
            || $horario->lunes == '14:00 a 22:00' ){
              $de14a15['lunes']++; 
            }
            if($horario->martes == '07:00 a 15:00' || $horario->martes == '08:00 a 16:00' || $horario->martes == '08:00 a 15:00'
            || $horario->martes == '09:00 a 16:00' || $horario->martes == '10:30 a 15:00' || $horario->martes == '10:00 a 18:00'
            || $horario->martes == '14:00 a 22:00' ){
              $de14a15['martes']++; 
            }
            if($horario->miercoles == '07:00 a 15:00' || $horario->miercoles == '08:00 a 16:00' || $horario->miercoles == '08:00 a 15:00'
            || $horario->miercoles == '09:00 a 16:00' || $horario->miercoles == '10:30 a 15:00' || $horario->miercoles == '10:00 a 18:00'
            || $horario->miercoles == '14:00 a 22:00' ){
              $de14a15['miercoles']++; 
            }
            if($horario->jueves == '07:00 a 15:00' || $horario->jueves == '08:00 a 16:00' || $horario->jueves == '08:00 a 15:00'
            || $horario->jueves == '09:00 a 16:00' || $horario->jueves == '10:30 a 15:00' || $horario->jueves == '10:00 a 18:00'
            || $horario->jueves == '14:00 a 22:00' ){
              $de14a15['jueves']++; 
            }
            if($horario->viernes == '07:00 a 15:00' || $horario->viernes == '08:00 a 16:00' || $horario->viernes == '08:00 a 15:00'
            || $horario->viernes == '09:00 a 16:00' || $horario->viernes == '10:30 a 15:00' || $horario->viernes == '10:00 a 18:00'
            || $horario->viernes == '14:00 a 22:00' ){
              $de14a15['viernes']++; 
            }
            if($horario->sabado == '07:00 a 15:00' || $horario->sabado == '08:00 a 16:00' || $horario->sabado == '08:00 a 15:00'
            || $horario->sabado == '09:00 a 16:00' || $horario->sabado == '10:30 a 15:00' || $horario->sabado == '10:00 a 18:00'
            || $horario->sabado == '14:00 a 22:00' ){
              $de14a15['sabado']++; 
            }
            if($horario->domingo == '07:00 a 15:00' || $horario->domingo == '08:00 a 16:00' || $horario->domingo == '08:00 a 15:00'
            || $horario->domingo == '09:00 a 16:00' || $horario->domingo == '10:30 a 15:00' || $horario->domingo == '10:00 a 18:00'
            || $horario->domingo == '14:00 a 22:00' ){
              $de14a15['domingo']++; 
            }
            /////////////////////////////////////////////////////////////////////////////////////////////
            if($horario->lunes == '08:00 a 16:00' || $horario->lunes == '09:00 a 16:00' ||  $horario->lunes == '10:00 a 18:00'
            || $horario->lunes == '14:00 a 22:00' || $horario->lunes == '15:00 a 19:00' || $horario->lunes == '15:00 a 22:00'
            || $horario->lunes == '15:30 a 22:00'  ){
              $de15a16['lunes']++; 
            }
             if($horario->martes == '08:00 a 16:00' || $horario->martes == '09:00 a 16:00' ||  $horario->martes == '10:00 a 18:00'
            || $horario->martes == '14:00 a 22:00' || $horario->martes == '15:00 a 19:00' || $horario->martes == '15:00 a 22:00'
            || $horario->martes == '15:30 a 22:00'  ){
              $de15a16['martes']++; 
            }
            if($horario->miercoles == '08:00 a 16:00' || $horario->miercoles == '09:00 a 16:00' ||  $horario->miercoles == '10:00 a 18:00'
            || $horario->miercoles == '14:00 a 22:00' || $horario->miercoles == '15:00 a 19:00' || $horario->miercoles == '15:00 a 22:00'
            || $horario->miercoles == '15:30 a 22:00'  ){
              $de15a16['miercoles']++; 
            }
            if($horario->jueves == '08:00 a 16:00' || $horario->jueves == '09:00 a 16:00' ||  $horario->jueves == '10:00 a 18:00'
            || $horario->jueves == '14:00 a 22:00' || $horario->jueves == '15:00 a 19:00' || $horario->jueves == '15:00 a 22:00'
            || $horario->jueves == '15:30 a 22:00'  ){
              $de15a16['jueves']++; 
            }
            if($horario->viernes == '08:00 a 16:00' || $horario->viernes == '09:00 a 16:00' ||  $horario->viernes == '10:00 a 18:00'
            || $horario->viernes == '14:00 a 22:00' || $horario->viernes == '15:00 a 19:00' || $horario->viernes == '15:00 a 22:00'
            || $horario->viernes == '15:30 a 22:00'  ){
              $de15a16['viernes']++; 
            }
            if($horario->sabado == '08:00 a 16:00' || $horario->sabado == '09:00 a 16:00' ||  $horario->sabado == '10:00 a 18:00'
            || $horario->sabado == '14:00 a 22:00' || $horario->sabado == '15:00 a 19:00' || $horario->sabado == '15:00 a 22:00'
            || $horario->sabado == '15:30 a 22:00'  ){
              $de15a16['sabado']++; 
            }
            if($horario->domingo == '08:00 a 16:00' || $horario->domingo == '09:00 a 16:00' ||  $horario->domingo == '10:00 a 18:00'
            || $horario->domingo == '14:00 a 22:00' || $horario->domingo == '15:00 a 19:00' || $horario->domingo == '15:00 a 22:00'
            || $horario->domingo == '15:30 a 22:00'  ){
              $de15a16['domingo']++; 
            }
            //////////////////////////////////////////////////////////////////////////////////////////////////////////
            if($horario->lunes == '10:00 a 18:00' || $horario->lunes == '14:00 a 22:00'
             || $horario->lunes == '15:00 a 19:00' || $horario->lunes == '15:00 a 22:00'
             || $horario->lunes == '15:30 a 22:00'  ){
              $de16a17['lunes']++; 
              $de17a18['lunes']++; 
              
            }
            if($horario->martes == '10:00 a 18:00' || $horario->martes == '14:00 a 22:00'
             || $horario->martes == '15:00 a 19:00' || $horario->martes == '15:00 a 22:00'
             || $horario->martes == '15:30 a 22:00'  ){
              $de16a17['martes']++; 
              $de17a18['martes']++; 
              
            }
            if($horario->miercoles == '10:00 a 18:00' || $horario->miercoles == '14:00 a 22:00'
             || $horario->miercoles == '15:00 a 19:00' || $horario->miercoles == '15:00 a 22:00'
             || $horario->miercoles == '15:30 a 22:00'  ){
              $de16a17['miercoles']++; 
              $de17a18['miercoles']++;
              
            }
            if($horario->jueves == '10:00 a 18:00' || $horario->jueves == '14:00 a 22:00'
             || $horario->jueves == '15:00 a 19:00' || $horario->jueves == '15:00 a 22:00'
             || $horario->jueves == '15:30 a 22:00'  ){
              $de16a17['jueves']++; 
              $de17a18['jueves']++; 
              
            }
            if($horario->viernes == '10:00 a 18:00' || $horario->viernes == '14:00 a 22:00'
             || $horario->viernes == '15:00 a 19:00' || $horario->viernes == '15:00 a 22:00'
             || $horario->viernes == '15:30 a 22:00'  ){
              $de16a17['viernes']++; 
              $de17a18['viernes']++;
              
            }
            if($horario->sabado == '10:00 a 18:00' || $horario->sabado == '14:00 a 22:00'
             || $horario->sabado == '15:00 a 19:00' || $horario->sabado == '15:00 a 22:00'
             || $horario->sabado == '15:30 a 22:00'  ){
              $de16a17['sabado']++;
              $de17a18['sabado']++; 
              
            }
            if($horario->domingo == '10:00 a 18:00' || $horario->domingo == '14:00 a 22:00'
             || $horario->domingo == '15:00 a 19:00' || $horario->domingo == '15:00 a 22:00'
             || $horario->domingo == '15:30 a 22:00'  ){
              $de16a17['domingo']++; 
              $de17a18['domingo']++; 
              
            }

            //////////////////////////////////////////////////////////////////////////////////

            if($horario->lunes == '14:00 a 22:00' || $horario->lunes == '15:00 a 19:00'
            || $horario->lunes == '15:00 a 22:00' || $horario->lunes == '15:30 a 22:00'  ){
             $de18a19['lunes']++; 
             }
             if($horario->martes == '14:00 a 22:00' || $horario->martes == '15:00 a 19:00'
            || $horario->martes == '15:00 a 22:00' || $horario->martes == '15:30 a 22:00'  ){
             $de18a19['martes']++; 
             }
             if($horario->miercoles == '14:00 a 22:00' || $horario->miercoles == '15:00 a 19:00'
            || $horario->miercoles == '15:00 a 22:00' || $horario->miercoles == '15:30 a 22:00'  ){
             $de18a19['miercoles']++; 
             }
             if($horario->jueves == '14:00 a 22:00' || $horario->jueves == '15:00 a 19:00'
            || $horario->jueves == '15:00 a 22:00' || $horario->jueves == '15:30 a 22:00'  ){
             $de18a19['jueves']++; 
             }
             if($horario->viernes == '14:00 a 22:00' || $horario->viernes == '15:00 a 19:00'
            || $horario->viernes == '15:00 a 22:00' || $horario->viernes == '15:30 a 22:00'  ){
             $de18a19['viernes']++; 
             }
             if($horario->sabado == '14:00 a 22:00' || $horario->sabado == '15:00 a 19:00'
            || $horario->sabado == '15:00 a 22:00' || $horario->sabado == '15:30 a 22:00'  ){
             $de18a19['sabado']++; 
             }
             if($horario->domingo == '14:00 a 22:00' || $horario->domingo == '15:00 a 19:00'
            || $horario->domingo == '15:00 a 22:00' || $horario->domingo == '15:30 a 22:00'  ){
             $de18a19['domingo']++; 
             }
             ////////////////////////////////////////////////////////////////////////////////////

             if($horario->lunes == '14:00 a 22:00' ||  $horario->lunes == '15:00 a 22:00' 
             || $horario->lunes == '15:30 a 22:00' ){
             $de19a20['lunes']++; 
             $de20a21['lunes']++; 
             $de21a22['lunes']++; 
              }
              if($horario->martes == '14:00 a 22:00' ||  $horario->martes == '15:00 a 22:00' 
              || $horario->martes == '15:30 a 22:00' ){
              $de19a20['martes']++;
              $de20a21['martes']++; 
              $de21a22['martes']++;  
               }
               if($horario->miercoles == '14:00 a 22:00' ||  $horario->miercoles == '15:00 a 22:00' 
               || $horario->miercoles == '15:30 a 22:00' ){
               $de19a20['miercoles']++;
               $de20a21['miercoles']++; 
               $de21a22['miercoles']++;  
                }
                if($horario->jueves == '14:00 a 22:00' ||  $horario->jueves == '15:00 a 22:00' 
                || $horario->jueves == '15:30 a 22:00' ){
                $de19a20['jueves']++;
                $de20a21['jueves']++; 
                $de21a22['jueves']++;  
                 }
                 if($horario->viernes == '14:00 a 22:00' ||  $horario->viernes == '15:00 a 22:00' 
                 || $horario->viernes == '15:30 a 22:00' ){
                 $de19a20['viernes']++;
                 $de20a21['viernes']++; 
                 $de21a22['viernes']++;  
                  }
                  if($horario->sabado == '14:00 a 22:00' ||  $horario->sabado == '15:00 a 22:00' 
                  || $horario->sabado == '15:30 a 22:00' ){
                  $de19a20['sabado']++;
                  $de20a21['sabado']++; 
                  $de21a22['sabado']++;  
                   }
                   if($horario->domingo == '14:00 a 22:00' ||  $horario->domingo == '15:00 a 22:00' 
                   || $horario->domingo == '15:30 a 22:00' ){
                   $de19a20['domingo']++;
                   $de20a21['domingo']++; 
                   $de21a22['domingo']++;  
                    }
              
              
             
             
         
        }

        return view('gestion.vistaPorHora')
        ->with('de7a8',$de7a8)
        ->with('de8a9',$de8a9)
        ->with('de9a10',$de9a10)
        ->with('de10a11',$de10a11)
        ->with('de11a12',$de11a12)
        ->with('de12a13',$de12a13)
        ->with('de13a14',$de13a14)
        ->with('de14a15',$de14a15)
        ->with('de15a16',$de15a16)
        ->with('de16a17',$de16a17)
        ->with('de17a18',$de17a18)
        ->with('de18a19',$de18a19)
        ->with('de19a20',$de19a20)
        ->with('de20a21',$de20a21)
        ->with('de21a22',$de21a22)      
        ;
    }

    public function dashboard (){
        return view('gestion.dashboard');
    }

    public function abandono(){
        return view('gestion.abandono');
    }

    public function productividad(){
        return view('gestion.productividad');
    }
}
