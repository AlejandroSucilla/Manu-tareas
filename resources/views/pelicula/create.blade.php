
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Añadir Pelicula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1>Afegir una Pelicula</h1>
<h2>--asucilla@institutmvm.cat-</h2>

<form action="/pelicula/create" method="POST" class="mt-4 p-4 border rounded bg-light">
    @csrf  <div class="mb-3">
        <label class="form-label">titulo</label>
        <input type="text" name="titulo" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Pais</label>
        <input type="text" name="pais" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">año_estreno</label>
        <input type="text" name="año_estreno" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Nominaciones a Oscar</label>
        <input type="text" name="nominaciones_oscar" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Oscars Ganados</label>
        <input type="text" name="oscar_ganados" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Portada de la Pelicula</label>
        <input type="file" name="imatge" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Guardar a la biblioteca</button>
</form>
</body>
</html>

