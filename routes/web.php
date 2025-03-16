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


Route::get('/tema1/juego1', function () {
    return view('Tema1.Juego1Tema1');  // Apunta a la vista 
});

Route::get('/tema1/quizz', function () {
    return view('Tema1.MiniQuizz1');  // Vista creada en resources/views/Tema1/MiniQuizz1.blade.php
});

Route::get('/tema2/quizz', function () {
    return view('Tema2.MiniQuizz2');  // Vista creada en resources/views/Tema1/MiniQuizz1.blade.php
});

Route::get('/tema3/quizz', function () {
    return view('Tema3.MiniQuizz3');  // Vista creada en resources/views/Tema1/MiniQuizz1.blade.php
});

Route::get('/tema4/quizz', function () {
    return view('Tema4.MiniQuizz4');  // Vista creada en resources/views/Tema1/MiniQuizz1.blade.php
});

Route::get('/tema5/quizz', function () {
    return view('Tema5.MiniQuizz5');  // Vista creada en resources/views/Tema1/MiniQuizz1.blade.php
});

Route::get('/tema6/quizz', function () {
    return view('Tema6.MiniQuizz6');  // Vista creada en resources/views/Tema1/MiniQuizz1.blade.php
});

Route::get('/tema7/quizz', function () {
    return view('Tema7.MiniQuizz7');  // Vista creada en resources/views/Tema1/MiniQuizz1.blade.php
});

Route::get('/tema8/quizz', function () {
    return view('Tema8.MiniQuizz8');  // Vista creada en resources/views/Tema1/MiniQuizz1.blade.php
});

Route::controller(JuegoController::class)->group(function(){
    Route::post('/guardar-puntaje', 'guardarPuntaje');
});

