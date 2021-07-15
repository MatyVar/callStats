<?php

use App\Http\Controllers\ControllerCalendar;
use App\Http\Controllers\GestionController;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'GestionController@panel');
Route::get('/productividad', 'GestionController@productividad')->name('gestion.productividad');
Route::get('/abandono', 'GestionController@abandono')->name('gestion.abandono');
Route::get('/', 'GestionController@panel')->name('gestion.index');
Route::get('/create', 'GestionController@create')->name('gestion.create');
Route::post('/operadores', 'GestionController@Store')->name('gestion.store');
Route::post('/operadores/assignFeriado', 'GestionController@asignarFeriado')->name('gestion.asignarFeriado');
Route::get('/operadores/{operador}','GestionController@show')->name('gestion.show');
Route::get('/operadores/{operador}/acciones','GestionController@acciones')->name('gestion.acciones');
Route::get('/operadores/{operador}/edit','GestionController@edit')->name('gestion.edit');
Route::get('/gestion/armar','GestionController@armar')->name('gestion.armar');
Route::put('/operadores/{operador}','GestionController@update')->name('gestion.update');
Route::get('/operadores/{operador}/del','GestionController@destroy')->name('gestion.destroy');
Route::get('/addEvent','GestionController@formEvent')->name('gestion.formEvento');
Route::get('/horariosVistaGral','GestionController@vistaHorarios')->name('gestion.vistaHorarios');
Route::post('/operadores/compensar/', 'GestionController@compensar')->name('gestion.compensar');
Route::get('/notes/{operador}','GestionController@notes')->name('gestion.notas');
Route::post('/addNote', 'GestionController@addNote')->name('gestion.addNote');
Route::get('/verNote', 'GestionController@verNote')->name('gestion.verNote');
Route::get('/deleteNote', 'GestionController@delNote')->name('gestion.delNote');
Route::get('/historico/{operador}','GestionController@mostrarHistorico')->name('gestion.historico');
Route::get('/coachingExpress', 'GestionController@coachingExpress')->name('gestion.coachingExpress');
Route::get('/escuchas/{operador}','GestionController@traerEscuchas')->name('gestion.escuchas');
Route::get('/deleteFecha/{fecha}/{operador}','GestionController@deleteFecha')->name('gestion.deleteFecha');
Route::get('/estadisticas','GestionController@estadisticas')->name('gestion.estadisticas');
Route::get('/finalizarVigencia/{noteid}','GestionController@finalizarVigencia')->name('gestion.finalizarVigencia');
Route::post('/recolectarNotas','GestionController@recolectarNotas')->name('gestion.recolectarNotas');
Route::get('/queryResultNotes','GestionController@queryResultNotes')->name('gestion.queryResultNotes');
Route::get('/finalizarNota','GestionController@finalizarNota')->name('gestion.finalizarNota');
Route::get('/finalizarNotaConDetalle','GestionController@finalizarNotaConDetalle')->name('gestion.finalizarNotaConDetalle');
Route::get('/finalizarNote','GestionController@finalizarNote')->name('gestion.finalizarNote');
Route::get('/fichadas/{legajo}','GestionController@fichadas')->name('gestion.fichero');
Route::get('/reportes','GestionController@reportes')->name('gestion.reportes');
Route::post('/stats','GestionController@consultarStats')->name('gestion.consultarStats');
Route::post('/statsRange','GestionController@consultarStatsRange')->name('gestion.consultarStatsRange');
Route::post('/statsRangeVPlan','GestionController@consultarStatsRangeVPlan')->name('gestion.consultarStatsRangeVPlan');

Route::post('/insertReporte','GestionController@insertReporte')->name('gestion.insertReporte');
Route::get('/cantidadOperadoresXhora','GestionController@operadoresPorHora')->name('gestion.vistaPorHora');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
