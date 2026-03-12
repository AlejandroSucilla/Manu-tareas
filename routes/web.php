<?php
use App\Http\Controllers\PeliculaControler;

Route::get('/mostrar', [PeliculaControler::class, 'index']);

// Aquesta ruta serveix per MOSTRAR el formulari
Route::get('/pelicula/create', [PeliculaControler::class, 'create']);

// Aquesta ruta serveix per REBRE les dades del formulari
Route::post('/pelicula/create', [PeliculaControler::class, 'store']);
