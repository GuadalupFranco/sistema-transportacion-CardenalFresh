<div class="container">
    <div class="row">
        <div class="col-md-12 form-floating mb-3">
            <input type="text" class="form-control" id="descripcion" name="descripcion"
                value="{{ old('descripcion', optional($mercancia)->descripcion) }}">
            <label for="descripcion">Descripcion</label>
        </div>
        <div class="col-md-12 form-floating mb-3">
            <input type="number" class="form-control" id="cantidad" name="cantidad"
                value="{{ old('cantidad', optional($mercancia)->cantidad) }}">
            <label for="cantidad">Cantidad</label>
        </div>
        <div class="col-md-12 form-floating mb-3">
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="number" id="precio" name="precio" class="form-control"
                    value="{{ old('precio', optional($mercancia)->precio) }}">
                <span class="input-group-text">.00</span>
            </div>
        </div>
        <div class="col-md-12 form-floating mb-3">
            <select class="form-select" name="tipo_mercancia_id" id="tipo_mercancia_id">
                <option value="" selected>Selecciona un tipo</option>
                @foreach ($tiposMercancias as $tipoMercancia)
                    <option value="{{ $tipoMercancia->id }}" 
                        @if ($tipoMercancia->id == old('tipo_mercancia_id', optional($mercancia)->tipo_mercancia_id)) selected @endif>
                        {{ $tipoMercancia->descripcion }}
                    </option>
                @endforeach
            </select>
            <label for="descripcion">Tipo de mercancia</label>
        </div>
    </div>
</div>
