<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Autores y sus peliculas </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1>Peliculas X Actores </h1>
<h2>--asucilla@institutmvm.cat-</h2>
@foreach($peliculas as $pelicula)
    <div class="mb-4">
        <h3>Pelicula: {{ $pelicula->titulo }}</h3>

        <!-- Prüfen, ob die Collection 'autors' leer ist -->
        @if($pelicula->autors->isEmpty())
            <p>Esta película no tiene autores/actores asociados.</p>
        @else
            <tr>
                @foreach($pelicula->autors as $autor)
                    <th>{{ $autor->nombre }} </th>
                @endforeach
            </tr>
        @endif
    </div>
@endforeach

<a href="/mostrar" class="btn btn-secondary">Tornar</a>
</body>
</html>


