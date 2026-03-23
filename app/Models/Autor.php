<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public function peliculas() {
        return $this->belongsToMany(Pelicula::class);
    }
}
