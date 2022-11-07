{{-- Modal para crear registro --}}
<div class="modal fade" tabindex="-1" id="crearMercancia" aria-labelledby="crearMercancia" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva mercancia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('parciales.errores')
                <form class="form" method="POST" action="{{ route('mercancias.store', $mercancia) }}">
                    @csrf
                    @include('Mercancias._form', ['mercancia' => null])
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal para editar registro --}}
<div class="modal fade" id="editarMercancia-{{ $mercancia->id }}" aria-labelledby="editarMercancia" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar mercancia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('parciales.errores')
                <form class="form" method="POST" action="{{ route('mercancias.update', $mercancia) }}">
                    @csrf @method('PATCH')
                    @include('Mercancias._form')
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

