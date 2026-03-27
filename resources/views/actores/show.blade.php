<div class="container mt-5">
    <h1>{{ $autor->nombre }}</h1>
    <div class="row">
        <div class="col-md-8">
            <p><strong>pais:</strong> {{ $autor->pais }}</p>
            <p><strong>Peliculas:</strong></p>
            @if($autor->peliculas->isEmpty())
                <p>No hay películas asociadas a este autor.</p>
            @else
                <ul>
                    @foreach($autor->peliculas as $pelicula)
                        <li>{{ $pelicula->titulo }}</li>
                    @endforeach
                </ul>
            @endif
            <p><strong>Fecha de Nacimiento:</strong> {{ $autor->Fecha_Nacimiento }}</p>
            <p><strong>Numero de Premios:</strong> {{ $autor->numeroPremios }} </p>
            <a href="/autores" class="btn btn-secondary">Tornar</a>
        </div>
    </div>
</div>
