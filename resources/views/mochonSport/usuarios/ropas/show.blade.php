@extends('estilos.bootstrap')
@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{ asset("imagenes/ropas/$ropa->pathRopa") }}" width="250" alt={{ $ropa->pathRopa }}>
        <div class="card-body">
            <h5 class="card-title">{{ $ropa->marca }}</h5>
            <p class="card-text">Color: {{ $ropa->color }}</p>
            <p class="card-text">Talla: {{ $ropa->talla }}</p>
            <p class="card-text">Marca: {{ $ropa->marca }}</p>
            <p class="card-text">Precio: {{ $ropa->precio }}</p>
            <p class="card-text">Volumen: {{ $ropa->cantidadRopa }}</p>
            <p class="card-text">Stock: {{ $ropa->stock }}</p>
            <p class="card-text">Fecha de subida: {{ $ropa->created_at->format('d-m-Y') }}</p>
            <li><a href="{{ route('ropas.index') }}">Volver al catálogo ropas</a></li>
        </div>
    </div>
@endsection
