<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedores.index', compact('fornecedores'));
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $request->nome;
        $fornecedor->telefone = $request->telefone;
        $fornecedor->email = $request->email;
        $fornecedor->save();

        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedor cadastrado com sucesso!');
    }

    public function show(Fornecedor $fornecedor)
    {
        //
    }

    public function edit(Fornecedor $fornecedor)
    {
        return view('fornecedores.edit', compact('fornecedor'));
    }

    public function update(Request $request, Fornecedor $fornecedor)
    {
        $fornecedor->nome = $request->nome;
        $fornecedor->telefone = $request->telefone;
        $fornecedor->email = $request->email;
        $fornecedor->save();

        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedor atualizado com sucesso!');
    }

    public function destroy(Fornecedor $fornecedor)
    {
        $fornecedor->delete();

        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedor excluído com sucesso!');
    }
}