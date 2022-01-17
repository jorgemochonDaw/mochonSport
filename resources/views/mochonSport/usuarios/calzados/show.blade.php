@extends('estilos.bootstrap')
@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{ asset("imagenes/calzados/$calzado->pathCalzado") }}" width="250" alt={{ $calzado->pathCalzado }}>
        <div class="card-body">
            <h5 class="card-title">{{ $calzado->marca }}</h5>
            <p class="card-text">Color: {{ $calzado->color }}</p>
            <p class="card-text">Talla: {{ $calzado->talla }}</p>
            <p class="card-text">Marca: {{ $calzado->marca }}</p>
            <p class="card-text">Precio: {{ $calzado->precio }}</p>
            <p class="card-text">Volumen: {{ $calzado->cantidadCalzado }}</p>
            <p class="card-text">Stock: {{ $calzado->stock }}</p>
            <p class="card-text">Fecha de subida: {{ $calzado->created_at->format('d-m-Y') }}</p>
            <li><a href="{{ route('calzados.index') }}">Volver a calzados</a></li>
        </div>
    </div>
@endsection
