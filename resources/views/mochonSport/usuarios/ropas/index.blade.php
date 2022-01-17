@extends('estilos.bootstrap')
@section('content')
    <h1>Ropas</h1>
    <ul>
        <li><a href="{{ route('calzados.index') }}">Catálogo calzados</a></li>
        <li><a href="{{ route('materiales.index') }}">Catálogo materiales</a></li>
    </ul>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Color</th>
                <th>Talla</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Volumen</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Fecha subida del ropa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ropas as $ropa)
                <tr>
                    <td>{{ $ropa->color }}</td>
                    <td>{{ $ropa->talla }}</td>
                    <td>{{ $ropa->marca }}</td>
                    <td>{{ $ropa->precio }}</td>
                    <td>{{ $ropa->cantidadRopa }}</td>
                    <td>{{ $ropa->stock }}</td>
                    <td><img src="{{ asset("imagenes/ropas/$ropa->pathRopa") }}" width="250" alt={{ $ropa->pathRopa }}>
                    </td>
                    <td>{{ $ropa->created_at->format('d-m-Y') }}</td>
                    @if (Auth::check() && Auth::user()->activo == 'S')
                        @if (Auth::user()->role == 'Admin')
                            <td>
                                <a class="btn btn-sm btn-success" href="{{ route('ropas.edit', $ropa->id) }}"><i
                                        class="fa fa-edit text-white"></i>Editar</a>
                                {{-- <form action="{{ route('ropas.destroy', $ropa->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Eliminar" class="mt-3 btn btn-danger">
                            </form> --}}
                                <a class="btn btn-sm btn-success" href="{{ route('ropas.show', $ropa->id) }}"><i
                                        class="fa fa-edit text-white"></i>Ver</a>
                                {{-- <form action="{{ route('ropas.carritos.store', ['ropa' => $ropa->id]) }}"
                                method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Añadir al carrito</button>
                            </form> --}}
                            </td>
                        @endif
                </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    @if (Auth::check() && Auth::user()->activo == 'S')
        @if (Auth::user()->role == 'Admin')
            <nav>
                <ul>
                    <li><a href="{{ route('ropas.create') }}">Subir nueva ropa</a></li>
                </ul>
            </nav>
        @endif
        <nav>
            {{-- <ul>
            <li><a href="{{ route('carrito.index') }}">Ver carrito</a></li>
        </ul> --}}
        </nav>
        {{-- @inject('carritoService', 'App\Http\Controllers\Services\CarritoService')
    <p>Carrito ({{ $carritoService->countCalzado() }})</p> --}}
    @endif
    <li><a href="{{ route('home') }}">Volver al home</a></li>
@endsection
