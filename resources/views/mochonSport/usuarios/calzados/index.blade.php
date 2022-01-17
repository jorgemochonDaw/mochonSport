@extends('estilos.bootstrap')
@section('content')
    <h1>Calzados</h1>
    <ul>
        <li><a href="{{ route('ropas.index') }}">Catálogo ropas</a></li>
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
                <th>Fecha subida del calzado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($calzados as $calzado)
                <tr>

                    <td>{{ $calzado->color }}</td>
                    <td>{{ $calzado->talla }}</td>
                    <td>{{ $calzado->marca }}</td>
                    <td>{{ $calzado->precio }}</td>
                    <td>{{ $calzado->cantidadCalzado }}</td>
                    <td>{{ $calzado->stock }}</td>
                    <td><img src="{{ asset("imagenes/calzados/$calzado->pathCalzado") }}" width="250"
                            alt={{ $calzado->pathCalzado }}></td>
                    <td>{{ $calzado->created_at->format('d-m-Y') }}</td>
                    @if (Auth::check() && Auth::user()->activo == 'S')
                        @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'Usuario')
                        @if (Auth::user()->role == 'Admin')
                        <td>
                                <a class="btn btn-sm btn-success" href="{{ route('calzados.edit', $calzado->id) }}"><i
                                        class="fa fa-edit text-white"></i>Editar</a>
                                {{-- <form action="{{ route('calzados.destroy', $calzado->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Eliminar" class="mt-3 btn btn-danger">
                            </form> --}}
                            @endif
                            <td>
                                <a class="btn btn-sm btn-success" href="{{ route('calzados.show', $calzado->id) }}"><i
                                        class="fa fa-edit text-white"></i>Ver</a>
                                <form action="{{ route('calzados.carritos.store', ['calzado' => $calzado->id]) }}"
                                    method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Añadir al carrito</button>
                                </form>
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
                    <li><a href="{{ route('calzados.create') }}">Subir nuevo calzado</a></li>
                </ul>
            </nav>
        @endif
        <nav>
            <ul>
                <li><a href="{{ route('carrito.index') }}">Ver carrito</a></li>
            </ul>
        </nav>
        @inject('carritoService', 'App\Http\Services\CarritoService')
        <p>Carrito ({{ $carritoService->contadorCarritoCalzado() }})</p>
    @endif
    <li><a href="{{ route('home') }}">Volver al home</a></li>
@endsection
