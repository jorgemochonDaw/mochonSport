@extends('estilos.bootstrap')
@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{ asset("imagenes/materiales/$material->pathMaterial") }}" width="250" alt={{ $material->pathMaterial }}>
        <div class="card-body">
            <h5 class="card-title">{{ $material->marca }}</h5>
            <p class="card-text">Color: {{ $material->silbatos }}</p>
            <p class="card-text">Talla: {{ $material->banderines }}</p>
            <p class="card-text">Marca: {{ $material->relojes }}</p>
            <p class="card-text">Precio: {{ $material->precio }}</p>
            <p class="card-text">Volumen: {{ $material->cantidadMaterial }}</p>
            <p class="card-text">Stock: {{ $material->stock }}</p>
            <p class="card-text">Fecha de subida: {{ $material->created_at->format('d-m-Y') }}</p>
            <li><a href="{{ route('materiales.index') }}">Volver a materiales deportivos</a></li>
        </div>
    </div>
@endsection
