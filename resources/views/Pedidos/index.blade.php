@extends('plantilla')

@section('contenido')
    <h2 class="text-center mb-4">Pedidos</h2>
    <div class="row">
        @forelse ($pedidos as $pedido)
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header text-center text-white bg-dark bg-opacity-50">{{$pedido->mercancia->descripcion}}</h5>
                <div class="card-body text-center">
                    <h6>Precio:</h6>
                    <p>${{$pedido->mercancia->precio}}</p>
                    <h6>Datos del cliente:</h6>
                    <p class="card-text">
                            {{ $pedido->cliente->nombre ." ".  $pedido->cliente->apellido_paterno . " " .$pedido->cliente->apellido_materno}}
                    </p>
                    <p class="card-text">{{ $pedido->cliente->telefono}}</p>
                    <span class="badge {{$pedido->estatus['color']}}">
                        <i class="bi {{$pedido->estatus['icono']}}"></i>
                        {{$pedido->estatus["texto"]}}
                    </span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span>
                            <i class="bi bi-geo-alt">Origen: {{$pedido->origen}}</i>
                        </span>
                    </li>
                    <li class="list-group-item">
                        <span>
                            <i class="bi bi-geo-alt-fill">Destino: {{$pedido->destino}}</i>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        @empty
            <div class="my-3 text-danger">
                No hay pedidos para mostrar
            </div>
        @endforelse
    </div>
@endsection
