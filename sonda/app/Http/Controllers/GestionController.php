<?php

namespace App\Http\Controllers;

use App\Models\CategoriaOperadores;
use App\Models\Operador as ModelsOperador;
use Database\Seeders\CategoriaOperador;
use Database\Seeders\operador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Operator;
use Symfony\Component\VarDumper\VarDumper;

use function GuzzleHttp\Promise\all;

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

    public function panel()
    {
        $operadores = Auth::user()->operadores;
        return view('gestion.panel')->with('operadores', $operadores);
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

        $categorias = CategoriaOperadores::all(['id', 'record']);

        return view('gestion.create')->with('categorias', $categorias);
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
        return redirect()->action('GestionController@panel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsOperador $operador)
    {
        $operadorName = $operador->nombre;
        $fechas = array();
        $fechasCompensadas = array();
        $fechasCompensadas2 = array();
        $historialCambiosArr=array();
        


        $user = DB::table('feriados_trabajados')->where('operador', $operadorName)->pluck('fecha');
        $compensacion = DB::table('feriados_compensados')->where('operador', $operadorName)->pluck('feriado_compensado');
        $compensacion2 = DB::table('feriados_compensados')->where('operador', $operadorName)->pluck('fecha');
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

        return view('gestion.show')->with('operador', $operador)->with('fechas', $fechas)->with('fechasCompensadas', $fechasCompensadas)->with('fechasCompensadas2', $fechasCompensadas2)->with('historialCambios',$historialCambiosArr);
        
    }

    public function mostrarHistorico(ModelsOperador $operador){
        
        $operadorName = $operador->nombre;
        $historialCambiosArr=array();
        
        $historialCambios = DB::select("select * from stamparoles where empleado = '$operadorName'");



        foreach ($historialCambios as $historial) {
            array_push($historialCambiosArr, $historial);
        }

        return view('gestion.historico')->with('historialCambios',$historialCambiosArr);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsOperador  $operador)

    {
        $idDelOperador= $operador->id;

        $query = DB::select("select * from operadors where id = '$idDelOperador'");

        $arrayOperador = array();

        foreach ($query as $info){
            array_push($arrayOperador,$info);
        }



        
        $categorias = CategoriaOperadores::all(['id', 'record']);
        //comento la linea de abajo para hacer pruebas de return con los valores que ya tiene el operador.
       return view('gestion.edit', compact('categorias', 'operador'))->with('informacion',$arrayOperador);
      
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




        $datos =    DB::select('SELECT * FROM operadors');

        $result = array();

        foreach ($datos as $dato) {
            array_push($result, $dato);
        }





        return view('gestion.vistaGeneral')->with('result', $result);
    }

    public function notes(ModelsOperador $operador){
        $notasDe=$operador->nombre;
        $datosArray=array();
        

        $datos = DB::select("SELECT * FROM notas where nombre='$notasDe'");
                                            //nombre de la variable/contenido de la variable.
        foreach ($datos as $dato) {
            array_push($datosArray, $dato);
        }
                                    

        return view('gestion.notas')->with('notas',$datosArray)->with('operador',$notasDe);
    }
    public function addNote(Request $request){
        $nombre= $request->nombre;
        $nota= $request['nota'];
        $titulo=$request['titulo'];

        DB::insert("insert into notas (nombre,nota,titulo) values ('$nombre','$nota','$titulo')");
        return redirect()->action('GestionController@panel');

        
        
    }

    public function verNote(Request $request){
        $noteId=$request->id;
        $user = DB::table('notas')->where('id', $noteId)->pluck('nota');
        $titulo = DB::table('notas')->where('id', $noteId)->pluck('titulo');

        
        return view('gestion.verNota')->with('contenido',$user[0])->with('titulo',$titulo[0]);
        
    }
     public function delNote(Request $request){
        $noteId=$request->id;
        DB::table('notas')
        ->where('id', $noteId)
        ->delete();

        return redirect()->action('GestionController@panel');
        
        
    }

   public function coachingExpress(){
       return view('gestion.coachingXpress');
   }

}


