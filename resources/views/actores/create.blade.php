
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Añadir autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1>Afegir un autor </h1>
<h2>--asucilla@institutmvm.cat-</h2>

<form action="{{ route('autor.store') }}" method="POST" enctype="multipart/form-data" class="mt-4 p-4 border rounded bg-light">
    @csrf  <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Fecha Nacimiento</label>
        <input type="date" name="Fecha_Nacimiento" class="form-control">
    </div>


    <div class="mb-3">
        <label class="form-label">Pais</label>
        <input type="text" name="pais" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Numero de Premios</label>
        <input type="text" name="numeroPremios" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Guardar a la biblioteca</button>
</form>
</body>
</html>

