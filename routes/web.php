<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCOntroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Saludos-Rutas terminadas
Route::get('/greeting/{name?}', function ($name="Jhon") {
    return view('example', ['name'=> $name]);
})->where(['name' => '[a-zA-Z]+']); //Valido tmb para poner la mayuscula al inicio

Route::get('/saludo/{nombre}/{lastname?}', function ($nombre,$lastname="Doe") {
    return 'Hola ' .$nombre.' '.$lastname;
})->where(['nombre' => '[a-zA-Z]+', 'lastname'=> '[a-zA-Z]+']);


//Operaciones-Rutas terminadas

Route::get('/suma/{n1}/{n2}', function ($n1,$n2) {
    return $n1 + $n2;
})->where(['n1'=>'[0-9]', 'n2'=>'[0-9]']);
Route::get('/resta/{n1}/{n2}', function ($n1,$n2) {
    return $n1 - $n2;
})->where(['n1'=>'[0-9]', 'n2'=>'[0-9]']);
Route::get('/multiplicacion/{n1}/{n2}', function ($n1,$n2) {
    return $n1 * $n2;
})->where(['n1'=>'[0-9]', 'n2'=>'[0-9]']);
Route::get('/division/{n1}/{n2}', function ($n1,$n2) {
    return $n1 / $n2;
})->where(['n1'=>'[0-9]', 'n2'=>'[0-9]']);

//Ruta controlador
Route::get('/user', [UserCOntroller:: class, 'index']);