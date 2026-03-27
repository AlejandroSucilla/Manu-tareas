<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Filmoteca - Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1 class="mb-4">Llistat de Autores</h1>
<h2 class="mb-4">-asucilla-</h2>
<a href="/autores/create" class="btn btn-success mb-3">Afegir un nou autor</a>
<a href="/mostrar" class="btn btn-success mb-3">Ver Peliculas</a>

<table class="table table-striped table-hover">
    <thead class="table-dark">
    <tr>
        <th>Nombre</th>
        <th>Fecha de Nacimiento</th>
        <th>Pais</th>
        <th>Numero de Premios</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @forelse($autores as $autor)
        <tr>
            <td>{{ $autor->nombre }}</td>
            <td>{{ $autor->Fecha_Nacimiento }}</td>
            <td>{{ $autor->pais }}</td>
            <td>{{ $autor->numeroPremios }}</td>
            <td>
                <a href="/autor/{{ $autor->id }}" class="btn btn-info btn-sm">Veure</a>
                <a href="/autores/{{ $autor->id }}/delete" class="btn btn-info btn-sm">Eliminar</a>
                <a href="/autores/{{ $autor->id }}/editar" class="btn btn-info btn-sm">Editar</a>
            </td>

        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center">No hi ha Peliculas a la Filmoteca.</td>
        </tr>
    @endforelse
    </tbody>
</table>
</body>
</html>

