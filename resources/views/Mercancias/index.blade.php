@extends('plantilla')

@section('contenido')
    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#crearMercancia">Nueva mercancia</button>
    <div class="card">
        <div class="card-header text-center bg-dark text-white">
            <h2>Mercancias</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th>Cantidad (kg/l/lb)</th>
                        <th>Precio ($)</th>
                        <th>Tipo</th>
                        <th width="20%"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mercancias as $mercancia)
                        <tr>
                            <td>{{ $mercancia->id }}</td>
                            <td>{{ $mercancia->descripcion }}</td>
                            <td>{{ $mercancia->cantidad }}</td>
                            <td>{{ $mercancia->precio }}</td>
                            <td>{{ $mercancia->tipo_mercancia->descripcion }}</td>
                            <td class="d-flex justify-content-around">
                                @include('Mercancias._modales')

                                <a href="#" class="btn btn-outline-warning" role="button"
                                    data-bs-target="#editarMercancia-{{ $mercancia->id }}" data-bs-toggle="modal">
                                    <i class="bi bi-pencil"></i>
                                    Editar
                                </a>

                                <form method="POST" action=" {{ route('mercancias.destroy', $mercancia->id) }} ">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger mx-2 confirmarEliminar">
                                        <i class="bi bi-trash"></i>
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="my-3 text-danger">
                            @include('Mercancias._modales', ['mercancia' => ''])
                            No hay mercancia para mostrar
                        </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    @if (count($errors) > 0)
        @section('scripts')
            <script>
                $(window).load(function() {
                    $('#crearMercancia').modal('show');
                })
            </script>
        @endsection
    @endif
@endsection

@section('scripts')
    <script>
        $('.confirmarEliminar').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                    title: `¿Seguro/a quieres eliminar esta mercancia?`,
                    text: "No podrás deshacer esta acción",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, elimínala!'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
