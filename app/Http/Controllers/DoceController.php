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
    $request->validate([
        'nome' => 'required|string|max:255',
        'descricao' => 'required|string',
        'preco' => 'required|numeric|min:0'
    ]);

    Doce::create($request->only(['nome', 'descricao', 'preco']));

    return redirect()->route('doces.index')
        ->with('success', 'Doce cadastrado com sucesso!');
    }

    public function edit(Doce $doce)
    {
        return view('doces.edit', compact('doce'));
    }

   public function update(Request $request, Doce $doce)
    {
    $request->validate([
        'nome' => 'required|string|max:255',
        'descricao' => 'required|string',
        'preco' => 'required|numeric|min:0'
    ]);

    $doce->update($request->only(['nome', 'descricao', 'preco']));

    return redirect()->route('doces.index')
        ->with('success', 'Doce atualizado com sucesso!');
    }

    public function destroy(Doce $doce)
    {
        $doce->delete();

        return redirect()->route('doces.index')->with('success', 'Doce excluído com sucesso!');
    }
}