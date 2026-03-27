<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\PeliculaControler;

Route::get('/mostrar', [PeliculaControler::class, 'index']);

// Aquesta ruta serveix per MOSTRAR el formulari
Route::get('/pelicula/create', [PeliculaControler::class, 'create']);
//------------------RUTA PELICULAS ACTORES
Route::get('/pelicula/peliculasautores', [PeliculaControler::class, 'peliculasautores']);


// Aquesta ruta serveix per REBRE les dades del formulari
Route::post('/pelicula/store', [PeliculaControler::class, 'store']);

Route::get('/pelicula/{id}', [PeliculaControler::class, 'show']);

Route::get('/pelicula/{id}/delete', [PeliculaControler::class, 'delete']);

Route::post('/pelicula/update/{id}', [PeliculaControler::class, 'update']);

Route::get('/pelicula/{id}/editar', [PeliculaControler::class, 'editar']);
//------------------RUTA ACTORES PELICULAS
Route::get('/autor/autorespeliculas', [AutorController::class, 'autorespeliculas']);


Route::get('/autores', [AutorController::class, 'index'])->name('autor.index');
Route::get('/autores/create', [AutorController::class, 'create'])->name('autor.create');
Route::post('/autores/store', [AutorController::class, 'store'])->name('autor.store');
Route::get('/autor/{id}', [AutorController::class, 'show'])->name('actores.show');
Route::get('/autores/{id}/delete', [AutorController::class, 'delete'])->name('actores.delete');

