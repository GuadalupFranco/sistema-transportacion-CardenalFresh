<?php

namespace App\Http\Controllers;

use App\Http\Requests\MercanciaRequest;
use App\Models\Mercancia;
use App\Models\TipoMercancia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MercanciaController extends Controller
{

    public function index()
    {
        return view('Mercancias.index', [
            'mercancias' => Mercancia::with('tipo_mercancia')->get(),
            'tiposMercancias' => TipoMercancia::get(),
            "accion" => ""
        ]);
    }

    public function create()
    {
    }

    public function store(MercanciaRequest $request)
    {
        $mercancia = new Mercancia($request->validated());
        $mercancia->save();
        return Redirect::route('mercancias.index')
            ->with('estatus', '¡Mercancia creada!');
    }

    public function show(Mercancia $mercancia)
    {
        //
    }

    public function edit(Mercancia $mercancia)
    {
    }

    public function update(MercanciaRequest $request, Mercancia $mercancia)
    {
        $mercancia->update(array_filter($request->validated()));
        return Redirect::route('mercancias.index')
            ->with('estatus', '¡Mercancia actualizada!');
    }

    public function destroy(Mercancia $mercancia) 
    {
        $mercancia->delete();
        return Redirect::route('mercancias.index')->with('estatus', '¡Mercancia eliminada!');
    }
}
