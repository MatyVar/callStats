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

Route::get('/gestion', 'GestionController@panel')->name('gestion.index');
Route::get('/create', 'GestionController@create')->name('gestion.create');
Route::post('/operadores', 'GestionController@Store')->name('gestion.store');
Route::post('/operadores/assignFeriado', 'GestionController@asignarFeriado')->name('gestion.asignarFeriado');
Route::get('/operadores/{operador}','GestionController@show')->name('gestion.show');
Route::get('/operadores/{operador}/acciones','GestionController@acciones')->name('gestion.acciones');
Route::get('/operadores/{operador}/edit','GestionController@edit')->name('gestion.edit');
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
