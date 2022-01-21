<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    protected $type = 'produto';

    public function index(Produto $produto) {
        $this->authorize('view', User::class);
        
        $produtos = $produto->paginate(1000);
        $type = $this->type;

        return view('table', compact('produtos', 'type'));
    }

    public function create() {
        $this->authorize('view', User::class);

        $type = $this->type;

        return view('register-form', compact('type'));
    }

    public function store(Request $request) {
        $this->authorize('store', User::class);

        $data = $request->validate([
            'descricao' => 'required',
            'cod_barras' => 'required',
            'preco_compra' => 'required',
            'moeda_compra' => 'required',
            'preco_venda' => 'required',
            'quantidade' => 'required',
        ]);
        
        Produto::create($data);

        return redirect()->back()->with('success', "Produto {$data['descricao']} criado com sucesso!");
    }

    public function edit(Produto $produto) {
        $this->authorize('view', User::class);

        $type = $this->type;

        return view('register-form', compact('produto', 'type'));
    }

    public function update(Produto $produto, Request $request)
    {
        $this->authorize('update', User::class);

        $data = $request->validate([
            'descricao' => 'sometimes',
            'cod_barras' => 'sometimes',
            'preco_compra' => 'sometimes',
            'moeda_compra' => 'sometimes',
            'preco_venda' => 'sometimes',
            'quantidade' => 'sometimes',
        ]);

        $produto->update($data);

        return redirect("/produtos/edit/{$produto->id}")->with('success', 'Update successful');
    }

    public function destroy(Produto $produto) {
        $this->authorize('destroy', User::class);

        $produto->delete();

        return redirect('/produtos')->with('success', 'Deleted successfully!');
    }
}
