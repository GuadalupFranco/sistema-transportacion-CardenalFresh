@extends('plantilla')

@section('contenido')
    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#crearCliente">Nuevo cliente</button>
    <div class="card">
        <div class="card-header text-center text-white bg-dark">
            <h2>Clientes</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Edad</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th width="20%"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->apellido_paterno }}</td>
                            <td>{{ $cliente->apellido_materno }}</td>
                            <td>{{ $cliente->edad }}</td>
                            <td>{{ $cliente->direccion }}</td>
                            <td>{{ $cliente->telefono }}</td>
                            <td class="d-flex justify-content-around">
                                @include('Clientes._modales')

                                <a href="#" class="btn btn-outline-warning" role="button"
                                    data-bs-target="#editarCliente-{{ $cliente->id }}" data-bs-toggle="modal">
                                    <i class="bi bi-pencil"></i>
                                    Editar
                                </a>

                                <form method="POST" action=" {{ route('clientes.destroy', $cliente->id) }} ">
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
                            @include('Clientes._modales', ['cliente' => ''])
                            No hay clientes para mostrar
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
                    $('#crearCliente').modal('show');
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
                    title: `¿Seguro/a quieres eliminar este cliente?`,
                    text: "No podrás deshacer esta acción",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, elimínalo!'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
