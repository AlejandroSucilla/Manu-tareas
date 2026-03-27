<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::all();
        return view('actores.index', compact('autores'));
    }

    public function create()
    {
        return view('actores.create');
    }

    public function show($id)
    {
        $autor = Autor::findOrFail($id);
        $peliculas = $autor->peliculas;
        return view('actores.show', compact('autor'));
    }

    // Guardar un nuevo autor
    public function store(Request $request)
    {
            $nouAutor = new Autor();
            $nouAutor->nombre = $request->input('nombre');
            $nouAutor->Fecha_Nacimiento = $request->input('Fecha_Nacimiento');
            $nouAutor->pais = $request->input('pais');
            $nouAutor->numeroPremios = $request->input('numeroPremios');

            $nouAutor->save();
            return redirect()->route('autor.index');
        }

    // Eliminar un autor
    public function delete($id)
    {
        $autor = Autor::findOrFail($id);
        $autor->peliculas()->detach();
        $autor->delete();

        return redirect()->route('autor.index');
    }
    public function autorespeliculas() {
        $autores = Autor::with('peliculas')->get();
        return view('actores.autorespeliculas', compact('autores'));
    }
}
