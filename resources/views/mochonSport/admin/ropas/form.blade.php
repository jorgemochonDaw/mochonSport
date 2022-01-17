@if (!$ropa->exists)
    @csrf
    <label for="color">Color</label>
    <input name="color" id="color" type="text" class="form-control" value="{{ old('color', $ropa->color) }}">
    <label for="talla">Talla</label>
    <input name="talla" id="talla" type="numeric" class="form-control" value="{{ old('talla', $ropa->talla) }}">
    <label for="marca">Marca</label>
    <input name="marca" id="marca" type="text" class="form-control" value="{{ old('marca', $ropa->marca) }}">
    <label for="tipo">Tipo</label>
    <input name="tipo" id="tipo" type="text" class="form-control" value="{{ old('tipo', $ropa->tipo) }}">
    <label for="precio">Precio</label>
    <input name="precio" id="precio" type="numeric" class="form-control" value="{{ old('precio', $ropa->precio) }}">
    <label for="cantidadRopa">Cantidad</label>
    <input name="cantidadRopa" id="cantidadRopa" type="numeric" class="form-control"
        value="{{ old('cantidadRopa', $ropa->cantidadRopa) }}">
    <label for="stock">Stock</label>
    <input name="stock" id="stock" type="text" class="form-control" value="{{ old(' stock', $ropa->stock) }}">
   <label for="pathRopa">Imagen</label>
    <input name="pathRopa" id="pathRopa" type="file" class="form-control"
        value="{{ old(' pathRopa', $ropa->pathRopa) }}">
@else
    @csrf
    <label for="color">Color</label>
    <input name="color" id="color" type="text" class="form-control" value="{{ old('color', $ropa->color) }}">
    <label for="talla">Talla</label>
    <input name="talla" id="talla" type="numeric" class="form-control" value="{{ old('talla', $ropa->talla) }}">
    <label for="marca">Marca</label>
    <input name="marca" id="marca" type="text" class="form-control" value="{{ old('marca', $ropa->marca) }}">
    <label for="tipo">Tipo</label>
    <input name="tipo" id="tipo" type="text" class="form-control" value="{{ old('tipo', $ropa->tipo) }}">
    <label for="precio">Precio</label>
    <input name="precio" id="precio" type="numeric" class="form-control"
        value="{{ old('precio', $ropa->precio) }}">
    <label for="cantidadRopa">Cantidad</label>
    <input name="cantidadRopa" id="cantidadRopa" type="numeric" class="form-control"
        value="{{ old('cantidadRopa', $ropa->cantidadRopa) }}">
    <label for="stock">Stock</label>
    <input name="stock" id="stock" type="text" class="form-control" value="{{ old(' stock', $ropa->stock) }}">
@endif
