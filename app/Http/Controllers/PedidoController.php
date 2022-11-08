<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Mercancia;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::with(['cliente', 'mercancia'])->get();

        foreach ($pedidos as $pedido) {
            if ($pedido->entregado_flag == 1) {
                $pedido->estatus = ['color' => 'bg-success', 'texto' => 'Entregado', 'icono' => 'bi-box-seam'];
            } elseif ($pedido->despachado_flag == 1) {
                $pedido->estatus = ['color' => 'bg-warning', 'texto' => 'Viajando', 'icono' => 'bi-truck'];
            } else {
                $pedido->estatus = ['color' => 'bg-danger', 'texto' => 'En Espera', 'icono' => 'bi-hourglass'];
            }
        }
        return view('Pedidos.index', [
            'pedidos' => $pedidos,
            'clientes' => Cliente::get(),
            'mercancias' => Mercancia::get(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    public function destroy(Pedido $pedido)
    {
        //
    }
}
