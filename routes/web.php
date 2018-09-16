<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jugadores', function () {
    
    return view('layer1',[
     
        'jugador'=>['DAVID OSPINA','YERRY MINA','CARLOS SÁNCHEZ'],
        'Posicion'=>['ARQUERO','DEFENSA','VOLANTE']
    ]);
});

Route::get('/equipos', function () {
    
    return view('pantalla2',[
        'con'=>1,
        'Equipo'=>['Colombia','Argentina','Brazil','Ecuador','Uruguay']
        
    ]);
});

//----------con controlador---------------------------------------

Route::resource('/controJugadores','JugadoresController');

Route::resource('/controEquipo','EquiposController');

//----------------------------------------------------------------