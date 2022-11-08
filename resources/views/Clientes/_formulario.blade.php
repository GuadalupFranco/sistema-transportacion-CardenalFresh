<div class="container">
    <div class="row">
        <div class="col-md-12 form-floating mb-3">
            <input type="text" class="form-control" id="nombre" name="nombre"
                value="{{ old('nombre', optional($cliente)->nombre) }}">
            <label for="nombre">Nombre(s)</label>
        </div>
        <div class="col-md-12 form-floating mb-3">
            <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno"
                value="{{ old('apellido_paterno', optional($cliente)->apellido_paterno) }}">
            <label for="apellido_paterno">Apellido paterno</label>
        </div>
        <div class="col-md-12 form-floating mb-3">
            <input type="text" class="form-control" id="apellido_materno" name="apellido_materno"
                value="{{ old('apellido_materno', optional($cliente)->apellido_materno) }}">
            <label for="apellido_materno">Apellido materno</label>
        </div>
        <div class="col-md-12 form-floating mb-3">
            <input type="number" class="form-control" id="edad" name="edad"
                value="{{ old('edad', optional($cliente)->edad) }}">
            <label for="edad">Edad</label>
        </div>
        <div class="col-md-12 form-floating mb-3">
            <input type="text" class="form-control" id="direccion" name="direccion"
                value="{{ old('direccion', optional($cliente)->direccion) }}">
            <label for="direccion">Direccion</label>
        </div>
        <div class="col-md-12 form-floating mb-3">
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input type="number" id="telefono" name="telefono" class="form-control"
                    value="{{ old('telefono', optional($cliente)->telefono) }}">
            </div>
        </div>
    </div>
</div>
