<?php

namespace App\Http\Controllers;

use App\Models\Doce;
use Illuminate\Http\Request;

class DoceController extends Controller
{
    public function index()
    {
        $doces = Doce::all();
        return view('doces.index', compact('doces'));
    }

    public function create()
    {
        return view('doces.create');
    }

    public function store(Request $request)
    {
        $doce = new Doce();
        $doce->nome = $request->nome;
        $doce->descricao = $request->descricao;
        $doce->preco = $request->preco;
        $doce->save();

        return redirect()->route('doces.index')->with('success', 'Doce cadastrado com sucesso!');
    }

    public function edit(Doce $doce)
    {
        return view('doces.edit', compact('doce'));
    }

    public function update(Request $request, Doce $doce)
    {
        $doce->nome = $request->nome;
        $doce->descricao = $request->descricao;
        $doce->preco = $request->preco;
        $doce->save();

        return redirect()->route('doces.index')->with('success', 'Doce atualizado com sucesso!');
    }

    public function destroy(Doce $doce)
    {
        $doce->delete();

        return redirect()->route('doces.index')->with('success', 'Doce excluído com sucesso!');
    }
}