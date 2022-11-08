{{-- Modal para crear registro --}}
<div class="modal fade" tabindex="-1" id="crearCliente" aria-labelledby="crearCliente" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('parciales.errores')
                <form class="form" method="POST" action="{{ route('clientes.store', $cliente) }}">
                    @csrf
                    @include('Clientes._formulario', ['cliente' => null])
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal para editar registro --}}
<div class="modal fade" id="editarCliente-{{ $cliente?->id ?? 0 }}" aria-labelledby="editarCliente" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('parciales.errores')
                <form class="form" method="POST" action="{{ route('clientes.update', $cliente) }}">
                    @csrf @method('PATCH')
                    @include('Clientes._formulario')
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

