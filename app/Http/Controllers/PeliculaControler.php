<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaControler extends Controller
{
    //
    public function index()
    {
        // Equivalent a: SELECT * FROM llibres
        $totsPelicules = Pelicula::all();

        // Enviem les dades a la vista (com el ModelAndView)
        return view('pelicula.index', ['Pelicula' => $totsPelicules]);
    }

    public function create()
    {
        $autors = \App\Models\Autor::all();
        return view('pelicula.create', compact('autors'));

    }
    public function show($id)
    {
        $pelicula = \App\Models\Pelicula::findOrFail($id);

        return view('pelicula.show', compact('pelicula'));
    }
    public function delete($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->autors()->detach();
        $pelicula->delete();

        return redirect('/mostrar');
    }
    public function editar($id)
    {
        $pelicula = \App\Models\Pelicula::findOrFail($id);
        $autors = \App\Models\Autor::all();
        return view('pelicula.editar', ['pelicula' => $pelicula, 'autors' => $autors]);
    }
    public function update(Request $request, $id)
    {
        $pelicula = \App\Models\Pelicula::findOrFail($id);

        $pelicula->titulo = $request->input('titulo');
        $pelicula->pais = $request->input('pais');
        $pelicula->año_estreno = $request->input('año_estreno');
        $pelicula->nominaciones_oscar = $request->input('nominaciones_oscar');
        $pelicula->oscar_ganados = $request->input('oscar_ganados');

        if ($request->hasFile('imatge')) {
            $fitxer = $request->file('imatge');
            $nomImatge = time() . '_' . $fitxer->getClientOriginalName();
            $fitxer->move(public_path('portades'), $nomImatge);
            $pelicula->imatge = $nomImatge;
        }

        $pelicula->save();

        if ($request->has('autors')) {
            $pelicula->autors()->sync($request->input('autors'));
        } else {
            $pelicula->autors()->detach();
        }
        return redirect('/mostrar');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        // 1. Creem un objecte nou del nostre Model (com una fila buida a la taula)
        $nouPelicula = new \App\Models\Pelicula();

        // 2. Omplim cada camp amb el que l'usuari ha escrit al formulari.
        $nouPelicula->titulo = $request->input('titulo');
        $nouPelicula->pais = $request->input('pais');
        $nouPelicula->año_estreno = $request->input('año_estreno');
        $nouPelicula->nominaciones_oscar = $request->input('nominaciones_oscar');
        $nouPelicula->oscar_ganados = $request->input('oscar_ganados');

        // GESTIÓ DE LA IMATGE
        if ($request->hasFile('imatge')) {
            // Guardem la imatge a la carpeta 'public/portades'
            $fitxer = $request->file('imatge');
            $nomImatge = time() . '_' . $fitxer->getClientOriginalName();
            $fitxer->move(public_path('portades'), $nomImatge);

            // Guardem el nom del fitxer a la base de dades
            $nouPelicula->imatge = $nomImatge;
        }
        // 3. El mètode save() l'envia definitivament a la base de dades MySQL
        $nouPelicula->save();

        // 2. Si l'usuari ha seleccionat autors, els "enganxem"
        if ($request->has('autors')) {
            // attach() agafa l'array d'IDs d'autors i els posa a la taula pivot
            $nouPelicula->autors()->attach($request->input('autors'));
        }

        // 4. Finalment, tornem al llistat de llibres per veure que s'ha afegit correctament
        return redirect('/mostrar');

    }
}
