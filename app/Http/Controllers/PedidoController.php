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
        $pedido = new Pedido();
        $pedido->cliente_nome = $request->cliente_nome;
        $pedido->doce = $request->doce;
        $pedido->quantidade = $request->quantidade;
        $pedido->save();

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido cadastrado com sucesso!');
    }

    public function show(Pedido $pedido)
    {
        //
    }

    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, Pedido $pedido)
    {
        $pedido->cliente_nome = $request->cliente_nome;
        $pedido->doce = $request->doce;
        $pedido->quantidade = $request->quantidade;
        $pedido->save();

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