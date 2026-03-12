<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Filmoteca - Llistat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1 class="mb-4">Llistat de Peliculas</h1>
<h2 class="mb-4">-asucilla-</h2>
<a href="/pelicula/create" class="btn btn-success mb-3">Afegir un llibre nou</a>
<table class="table table-striped table-hover">
    <thead class="table-dark">
    <tr>
        <th>Títol</th>
        <th>Pais</th>
        <th>año_estreno</th>
        <th>nominaciones_oscar</th>
        <th>oscar_ganados</th>
    </tr>
    </thead>
    <tbody>
    @forelse($Pelicula as $Peliculas)
        <tr>
            <td>{{ $Peliculas->titulo }}</td>
            <td>{{ $Peliculas->pais }}</td>
            <td>{{ $Peliculas->año_estreno }}</td>
            <td>{{ $Peliculas->nominaciones_oscar }}</td>
            <td>{{ $Peliculas->oscar_ganados }}</td>
            <td>
                <a href="/pelicula/{{ $Peliculas->id }}" class="btn btn-info btn-sm">Veure</a>
            </td>
            <td>
                <a href="/pelicula/{{ $Peliculas->id }}" class="btn btn-info btn-sm">Eliminar</a>
            </td>

        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center">No hi ha llibres a la biblioteca.</td>
        </tr>
    @endforelse
    </tbody>
</table>
</body>
</html>

