<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produto = Produto::all();
        return view("produto.index", compact('produto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Vou mostrar o formulário de cadastro de produto
        //Método GET
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            Produto::create($request->all());
     
            return redirect()->route('produto.index')
                            ->with('success', 'Produto criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::findOrFail($id);
        return view("produto.edit", compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());
     
        return redirect()->route('produto.index')
                        ->with('success', 'Produto atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
 
        return redirect()->route('produto.index')
                        ->with('success', 'Produto deletado com sucesso.');
    }

    public function delete(string $id)
    {
        $produto = Produto::findOrFail($id);
        return view("produto.delete", compact('produto'));
    }
}