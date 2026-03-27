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

<form action="/pelicula/update/{{ $pelicula->id }}" method="post" enctype="multipart/form-data" class="mt-4 p-4 border rounded bg-light">
    @csrf  <div class="mb-3">
        <label class="form-label">titulo</label>
        <label>Titulo</label><input type="text" name="titulo" value=" {{$pelicula->titulo}}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Pais</label>
        <input type="text" name="pais" value="{{ $pelicula->pais }}" class="form-control"><br/>
    </div>
    <div class="mb-3">
        <label class="form-label">Actores</label>
        <select name="autors[]" class="form-select" multiple>
            @foreach($autors as $autor)
                <option value="{{ $autor->id }}"
                        @if($pelicula->autors->contains('id', $autor->id)) selected @endif>
                    {{ $autor->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">año_estreno</label>
        <input type="text" name="año_estreno" value="{{ $pelicula->año_estreno }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Nominaciones a Oscar</label>
        <input type="text" name="nominaciones_oscar" value="{{ $pelicula->nominaciones_oscar }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Oscars Ganados</label>
        <input type="text" name="oscar_ganados" value="{{ $pelicula->oscar_ganados }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Portada de la Pelicula</label>
        <img src="{{ asset('portades/' . $pelicula->imatge) }}" class="img-fluid rounded" style="width: 150px;height:150px;">
    </div>

    <button type="submit" class="btn btn-primary">Guardar a la biblioteca</button>
</form>
</body>
</html>


