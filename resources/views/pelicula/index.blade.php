<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca - Llistat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1 class="mb-4">Llistat de Peliculas</h1>
<h2 class="mb-4">-asucilla-</h2>

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
    @forelse($llibres as $llibre)
        <tr>
            <td>{{ $llibre->titol }}</td>
            <td>{{ $llibre->pais }}</td>
            <td>{{ $llibre->año_estreno }}</td>
            <td>{{ $llibre->nominaciones_oscar }}</td>
            <td>{{ $llibre->oscar_ganados }}</td>

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

