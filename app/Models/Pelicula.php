<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model{
    public function autors()
    {
        return $this->belongsToMany(Autor::class);
    }
}
