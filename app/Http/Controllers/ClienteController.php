<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    public function index()
    {
        return view('Clientes.index', [
            'clientes' => Cliente::get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(ClienteRequest $request)
    {
        $cliente = new Cliente($request->validated());
        $cliente->telefono = strval($cliente->telefono);
        $cliente->save();
        return Redirect::route('clientes.index')
            ->with('estatus', '¡Cliente creado!');
    }

    public function show(Cliente $cliente)
    {
        //
    }

    public function edit(Cliente $cliente)
    {
        //
    }

    public function update(ClienteRequest $request, Cliente $cliente)
    {
        $cliente->fill($request->validated());
        $cliente->telefono = strval($request->input("telefono"));
        $cliente->save();
        return Redirect::route('clientes.index')
            ->with('estatus', '¡Cliente actualizado!');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return Redirect::route('clientes.index')->with('estatus', '¡Cliente eliminado!');
    }
}
