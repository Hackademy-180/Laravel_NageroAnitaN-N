<?php

use Illuminate\Support\Facades\Route;



// Il controller gestisce una collezione di risorse

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;

// Homepage
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Articles CRUD
// Rotta specifica per cui articoli devon rimanere collegati con il proprio controller; (metodo + pratico rapido e codice pulito)
Route::resource('articles', ArticleController::class);

// Tags CRUD
// Rotta index per vedere a lista
Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
// Rotta per creare dei tag con il controller apposito
Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');


// Rotta delle memorizzazioni dopo aggiornamento al metodo store verran salvari ed immagazzinati in db
Route::post('/tags', [TagController::class, 'store'])->name('tags.store');


// Rotta specifica per cui puoi eliminare dei tag che crei
Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
