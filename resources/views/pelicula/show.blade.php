<div class="container mt-5">
    <h1>{{ $pelicula->titulo }}</h1>
    <div class="row">
        <div class="col-md-4">
            @if($pelicula->imatge)
                <img src="{{ asset('portades/' . $pelicula->imatge) }}" class="img-fluid rounded" style="width: 150px;height:150px;">
            @else
                <img src="https://via.placeholder.com/300x400" class="img-fluid">
            @endif
        </div>
        <div class="col-md-8">
            <p><strong>pais:</strong> {{ $pelicula->pais }}</p>
            <p><strong>año_estreno:</strong> {{ $pelicula->año_estreno }}</p>
            <p><strong>nominaciones_oscar:</strong> {{ $pelicula->nominaciones_oscar }} </p>
            <p><strong>oscar_ganados:</strong> {{ $pelicula->oscar_ganados }} </p>
            <a href="/mostrar" class="btn btn-secondary">Tornar</a>
        </div>
    </div>
</div>
