<?php

use App\Http\Controllers\TarefaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tarefas', TarefaController::class);
