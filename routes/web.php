<?php

use App\Http\Controllers\JuegoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return view('index'); // Esto muestra la vista index.blade.php
    //return redirect('/admin');
});

Route::get('/alfabeto', function () {
    return view('Tema1.Alfabeto');  // Esta es la vista que se mostrará
})->name('tema1.alfabeto');

//Juego_Final

Route::get('/indexjuego', function () {
    return view('Desafio_Aprendizaje.index'); // Vista de inicio
})->name('indexjuego');

Route::get('/menu', function () {
    return view('Desafio_Aprendizaje.menu'); // Vista de selección de categoría
});

Route::get('/juego', function () {
    return view('Desafio_Aprendizaje.juego'); // Vista de juego
});

Route::get('/final', function () {
    return view('Desafio_Aprendizaje.final'); // Vista de resultado final
});


Route::controller(JuegoController::class)->group(function(){
    Route::post('/guardar-puntaje', 'guardarPuntaje');
});
