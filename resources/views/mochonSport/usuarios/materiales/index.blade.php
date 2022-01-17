@extends('estilos.bootstrap')
@section('content')
    <h1>Materiales</h1>
    <ul>
        <li><a href="{{ route('calzados.index') }}">Catálogo calzados</a></li>
        <li><a href="{{ route('ropas.index') }}">Ropas</a></li>
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
                <th>Fecha subida del material</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materiales as $material)
                <tr>
                    <td>{{ $material->silbatos }}</td>
                    <td>{{ $material->banderines }}</td>
                    <td>{{ $material->relojes }}</td>
                    <td>{{ $material->precio }}</td>
                    <td>{{ $material->cantidadMaterial }}</td>
                    <td>{{ $material->stock }}</td>
                    <td><img src="{{ asset("imagenes/materiales/$material->pathMaterial") }}" width="250" alt={{ $material->pathRopa }}>
                    </td>
                    <td>{{ $material->created_at->format('d-m-Y') }}</td>
                    @if (Auth::check() && Auth::user()->activo == 'S')
                        @if (Auth::user()->role == 'Admin')
                            <td>
                                <a class="btn btn-sm btn-success" href="{{ route('materiales.edit',$material->id) }}"><i
                                        class="fa fa-edit text-white"></i>Editar</a>
                                {{-- <form action="{{ route('ropas.destroy', $material->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Eliminar" class="mt-3 btn btn-danger">
                            </form> --}}
                                <a class="btn btn-sm btn-success" href="{{ route('materiales.show', $material->id) }}"><i
                                        class="fa fa-edit text-white"></i>Ver</a>
                                {{-- <form action="{{ route('ropas.carritos.store', ['material' => $material->id]) }}"
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
                    <li><a href="{{ route('materiales.create') }}">Subir nuevo material deportivo</a></li>
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
