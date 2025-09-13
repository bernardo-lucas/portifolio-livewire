<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\QuemSouEu;
use App\Livewire\Sobre;
use App\Livewire\Projetos;
use App\Livewire\Contato;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', Home::class);
Route::get('/quem-sou-eu', QuemSouEu::class);
Route::get('/sobre', Sobre::class);
Route::get('/projetos', Projetos::class);
Route::get('/contato', Contato::class);
