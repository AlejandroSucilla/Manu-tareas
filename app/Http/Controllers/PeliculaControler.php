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
        return view('pelicula.create');
    }
    public function show($id)
    {
        // Busquem el llibre pel seu ID. Si no existeix, donarà un error 404.

        $pelicula = \App\Models\Pelicula::findOrFail($id);
        return view('pelicula.show', compact('pelicula'));
    }


    public function store(\Illuminate\Http\Request $request)
    {
        // 1. Creem un objecte nou del nostre Model (com una fila buida a la taula)
        $nouPelicula = new \App\Models\Pelicula();

        // 2. Omplim cada camp amb el que l'usuari ha escrit al formulari.
        // Fem servir $request->input('NOM_DEL_CAMP_HTML')
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

            // 3. El mètode save() l'envia definitivament a la base de dades MySQL
            $nouPelicula->save();

            // 4. Finalment, tornem al llistat de llibres per veure que s'ha afegit correctament
            return redirect('/mostrar');


        }


    }
}
