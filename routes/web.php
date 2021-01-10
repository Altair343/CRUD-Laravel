<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PapeleraController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estas
| RouteServiceProvider carga las rutas dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo genial!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index.index');

Route::get('notas', [NoteController::class, 'index'])->name('notas.index');
Route::post('notas', [NoteController::class, 'store'])->name('notas.store');
Route::get('notas/all', [NoteController::class, 'noteAlls'])->name('notas.all');
Route::get('notas/record', [NoteController::class, 'noteRects'])->name('notas.rect');
Route::get('notas/link', [NoteController::class, 'noteLinks'])->name('notas.link');
Route::get('notas/link', [NoteController::class, 'noteLinks'])->name('notas.link');
Route::get('notas/{id}/arch', [ NoteController::class, 'updateArch'])->name('notas.arch');
Route::get('notas/{id}/edit', [NoteController::class, 'noteEdit'])->name('notas.edit');
Route::put('notas/{id}', [NoteController::class, 'update'])->name('notas.update');

Route::get('papelera', [PapeleraController::class, 'index'])->name('paper.index');
Route::get('papelera/{id}/arch', [ PapeleraController::class, 'updateArch'])->name('paper.arch');
Route::get('papelera/{id}/delet', [ PapeleraController::class, 'destroy'])->name('paper.delet');