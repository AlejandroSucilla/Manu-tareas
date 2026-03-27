<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Autores y sus peliculas </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1>Autores X Peliculas</h1>
<h2>--asucilla@institutmvm.cat-</h2>

    @foreach($autores as $autor)
        <div class="mb-4">
            <h3>Autor: {{ $autor->nombre }}</h3>

            @if($autor->peliculas->isEmpty())
                <p>Este autor no tiene películas.</p>
            @else
                <tr>
                    @foreach($autor->peliculas as $pelicula)
                        <th>{{ $pelicula->titulo }}</th>
                        <a href="/pelicula/{{ $pelicula->id }}">Ver mas</a>
                        <th></th>
                    @endforeach
                </tr>
            @endif
        </div>

    @endforeach
<a href="/mostrar" class="btn btn-secondary">Tornar</a>
</body>
</html>


