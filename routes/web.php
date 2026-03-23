<?php
use App\Http\Controllers\PeliculaControler;

Route::get('/mostrar', [PeliculaControler::class, 'index']);

// Aquesta ruta serveix per MOSTRAR el formulari
Route::get('/pelicula/create', [PeliculaControler::class, 'create']);

// Aquesta ruta serveix per REBRE les dades del formulari
Route::post('/pelicula/store', [PeliculaControler::class, 'store']);

Route::get('/pelicula/{id}', [PeliculaControler::class, 'show']);

Route::get('/pelicula/{id}/delete', [PeliculaControler::class, 'delete']);

Route::post('/pelicula/update/{id}', [PeliculaControler::class, 'update']);

Route::get('/pelicula/{id}/editar', [PeliculaControler::class, 'editar']);
