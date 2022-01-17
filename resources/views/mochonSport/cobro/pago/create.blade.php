<h1>Pagos</h1>
<p>{{ $factura->total }}€</p>

<form action="{{ route('factura.pago.store', ['factura' => $factura->id]) }}" method="post">
    @csrf
    <button type="submit">Aceptar pago</button>
</form>

<form action="{{ route('pdf',['pdf' => $factura->id]) }}" method="get">
    @csrf
    <button type="submit">Descargar factura</button>
</form>
