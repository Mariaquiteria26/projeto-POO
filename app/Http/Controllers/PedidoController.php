<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_nome' => 'required|string|max:255',
            'doce' => 'required|string|max:255',
            'quantidade' => 'required|numeric|min:1'
        ]);

        Pedido::create($request->only([
            'cliente_nome',
            'doce',
            'quantidade'
        ]));

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido cadastrado com sucesso!');
    }

    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, Pedido $pedido)
    {
        $request->validate([
            'cliente_nome' => 'required|string|max:255',
            'doce' => 'required|string|max:255',
            'quantidade' => 'required|numeric|min:1'
        ]);

        $pedido->update($request->only([
            'cliente_nome',
            'doce',
            'quantidade'
        ]));

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido atualizado com sucesso!');
    }

    public function destroy(Pedido $pedido)
    {
        $pedido->delete();

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido excluído com sucesso!');
    }
}