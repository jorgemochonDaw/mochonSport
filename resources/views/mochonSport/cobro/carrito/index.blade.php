@if (!isset($carrito) || $carrito->calzados->isEmpty())
    <p>Carrito vacio</p>
@else
    <table>
        <tr>
            <th>Color</th>
            <th>Talla</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Volumen</th>
            <th>Stock</th>
            <th>Imagen</th>
            <th>Cantidad añadida</th>
        </tr>
        @foreach ($carrito->calzados as $calzado)
            <tr>
                <td>{{ $calzado->color }}</td>
                <td>{{ $calzado->talla }}</td>
                <td>{{ $calzado->marca }}</td>
                <td>{{ $calzado->precio }}</td>
                <td>{{ $calzado->anniadido }}</td>
                <td>{{ $calzado->stock }}</td>
                <td><img src="{{ asset("imagenes/calzados/$calzado->pathCalzado") }}" width="250"
                        alt={{ $calzado->pathCalzado }}></td>
                <td>{{ $calzado->cantidadCalzado }}</td>
                <td>
                    <form method="POST"
                        action="{{ route('calzados.carritos.destroy', [
                            'carrito' => $carrito->id,
                            'calzado' => $calzado->id,
                        ]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-success">Remover del carrito</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('factura.create') }}">Facturar</a>
@endempty
