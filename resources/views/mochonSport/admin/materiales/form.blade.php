@if (!$material->exists)
    @csrf
    <label for="silbatos">Silbatos</label>
    <input name="silbatos" id="silbatos" type="text" class="form-control"
        value="{{ old('silbatos', $material->silbatos) }}">
    <label for="banderines">Banderines</label>
    <input name="banderines" id="banderines" type="numeric" class="form-control"
        value="{{ old('banderines', $material->banderines) }}">
    <label for="relojes">Relojes</label>
    <input name="relojes" id="relojes" type="text" class="form-control"
        value="{{ old('relojes', $material->relojes) }}">
    <label for="tarjetas">Tarjetas</label>
    <input name="tarjetas" id="tarjetas" type="text" class="form-control"
        value="{{ old('tarjetas', $material->tarjetas) }}">
    <label for="precio">Precio</label>
    <input name="precio" id="precio" type="numeric" class="form-control"
        value="{{ old('precio', $material->precio) }}">
    <label for="cantidadMaterial">Cantidad</label>
    <input name="cantidadMaterial" id="cantidadMaterial" type="numeric" class="form-control"
        value="{{ old('cantidadMaterial', $material->cantidadMaterial) }}">
    <label for="stock">Stock</label>
    <input name="stock" id="stock" type="text" class="form-control" value="{{ old(' stock', $material->stock) }}">
    <label for="pathMaterial">Imagen</label>
    <input name="pathMaterial" id="pathMaterial" type="file" class="form-control"
        value="{{ old(' pathMaterial', $material->pathMaterial) }}">
@else
    @csrf
    <label for="silbatos">Silbatos</label>
    <input name="silbatos" id="silbatos" type="text" class="form-control"
        value="{{ old('silbatos', $material->silbatos) }}">
    <label for="banderines">Banderines</label>
    <input name="banderines" id="banderines" type="numeric" class="form-control"
        value="{{ old('banderines', $material->banderines) }}">
    <label for="relojes">Relojes</label>
    <input name="relojes" id="relojes" type="text" class="form-control"
        value="{{ old('relojes', $material->relojes) }}">
    <label for="tarjetas">Tarjeta</label>
    <input name="tarjetas" id="tarjetas" type="text" class="form-control"
        value="{{ old('tarjetas', $material->tarjetas) }}">
    <label for="precio">Precio</label>
    <input name="precio" id="precio" type="numeric" class="form-control"
        value="{{ old('precio', $material->precio) }}">
    <label for="cantidadMaterial">Cantidad</label>
    <input name="cantidadMaterial" id="cantidadMaterial" type="numeric" class="form-control"
        value="{{ old('cantidadMaterial', $material->cantidadMaterial) }}">
    <label for="stock">Stock</label>
    <input name="stock" id="stock" type="text" class="form-control" value="{{ old(' stock', $material->stock) }}">
@endif
