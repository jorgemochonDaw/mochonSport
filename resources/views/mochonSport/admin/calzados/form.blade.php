@if (!$calzado->exists)
    @csrf
    <!-- token de proteccion -->
    <label for="color">Color</label>
    <input name="color" id="color" type="text" class="form-control" value="{{ old('color', $calzado->color) }}">
    <label for="talla">Talla</label>
    <input name="talla" id="talla" type="numeric" class="form-control" value="{{ old('talla', $calzado->talla) }}">
    <label for="marca">Marca</label>
    <input name="marca" id="marca" type="text" class="form-control" value="{{ old('marca', $calzado->marca) }}">
    <label for="precio">Precio</label>
    <input name="precio" id="precio" type="numeric" class="form-control"
        value="{{ old('precio', $calzado->precio) }}">
    <label for="cantidadCalzado">Cantidad</label>
    <input name="cantidadCalzado" id="cantidadCalzado" type="numeric" class="form-control"
        value="{{ old('precio', $calzado->cantidadCalzado) }}">
    <label for="stock">Stock</label>
    <input name="stock" id="stock" type="text" class="form-control" value="{{ old(' stock', $calzado->stock) }}">
    <label for="pathCalzado">Imagen calzado</label>
    <input name="pathCalzado" id="pathCalzado" type="file" class="form-control"
        value="{{ old('pathCalzado', $calzado->pathCalzado) }}">
@else
    @csrf
    <!-- token de proteccion -->
    <label for="color">Color</label>
    <input name="color" id="color" type="text" class="form-control" value="{{ old('color', $calzado->color) }}">
    <label for="talla">Talla</label>
    <input name="talla" id="talla" type="numeric" class="form-control" value="{{ old('talla', $calzado->talla) }}">
    <label for="marca">Marca</label>
    <input name="marca" id="marca" type="text" class="form-control" value="{{ old('marca', $calzado->marca) }}">
    <label for="precio">Precio</label>
    <input name="precio" id="precio" type="numeric" class="form-control"
        value="{{ old('precio', $calzado->precio) }}">
    <label for="cantidadCalzado">Cantidad</label>
    <input name="cantidadCalzado" id="cantidadCalzado" type="numeric" class="form-control"
        value="{{ old('precio', $calzado->cantidadCalzado) }}">
    <label for="stock">Stock</label>
    <input name="stock" id="stock" type="text" class="form-control" value="{{ old(' stock', $calzado->stock) }}">
@endif

