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
Route::get('/menu.blade.php', function () {
    return view('menu');
});
Route::get('/registroAlumnos.blade.php', function () {
    return view('registroAlumnos');
});
Route::get('/tablaAlumnos.blade.php', function () {
    return view('tablaAlumnos');
});

Route::get('/welcome.blade.php', function () {
    return view('welcome');
});

Route::get('/registroMaestros.blade.php', function () {
    return view('registroMaestros');
});

Route::get('/tablaMaestros.blade.php', function () {
    return view('tablaMaestros');
});

Route::get('/registroMaterias.blade.php', function () {
    return view('registroMaterias');
});
Route::get('/tablaMaterias.blade.php', function () {
    return view('tablaMaterias');
});

Route::get('/registroGrupo.blade.php', function () {
    return view('registroGrupo');
});
Route::get('/tablaGrupo.blade.php', function () {
    return view('tablaGrupo');
});

