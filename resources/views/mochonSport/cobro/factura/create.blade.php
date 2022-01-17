<h1>Facturar</h1>
<h4>Factura total <strong>{{ $carrito->total }}€</strong></h4>
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
        <div class="col-3">
            <td>{{ $calzado->color }}</td>
            <td>{{ $calzado->talla }}</td>
            <td>{{ $calzado->marca }}</td>
            <td>{{ $calzado->precio }}</td>
            <td>{{ $calzado->cantidadCalzado }}</td>
            <td>{{ $calzado->stock }}</td>
            <td><img src="{{ asset("imagenes/calzados/$calzado->pathCalzado") }}" width="250"
                    alt={{ $calzado->pathCalzado }}></td>
            <td>{{ $calzado->cantidadCalzado }}</td>
            <td>
                <strong>
                    {{ $calzado->total }}€
                </strong></td>
        </div>
    @endforeach
</table>
<nav>
    <ul>
        <li><a href="{{ route('carrito.index') }}">Volver carrito</a></li>
    </ul>
</nav>
<form action="{{ route('factura.store') }}" method="post">
    @csrf
    <button type="submit">Aceptar factura</button>
</form>


