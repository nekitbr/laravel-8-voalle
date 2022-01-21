<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClienteController extends Controller
{
    protected $type = 'cliente';

    public function index(Cliente $cliente) {
        $this->authorize('view', User::class);
        
        $clientes = $cliente->paginate(1000);
        $type = $this->type;

        return view('table', compact('clientes', 'type'));
    }

    public function create() {
        $this->authorize('view', User::class);

        $type = $this->type;

        return view('register-form', compact('type'));
    }

    public function store(Request $request) {
        $this->authorize('store', User::class);

        $data = $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'endereco' => 'required',
            'email' => 'sometimes|email|unique:clientes,email',
            'fone' => 'sometimes',
            'nascimento' => 'sometimes',
            'sexo' => 'sometimes'
        ]);
        
        Cliente::create($data);

        return redirect('/clientes')->with('success', "Cliente {$data['nome']} criado com sucesso!");
    }

    public function edit(Cliente $cliente) {
        $this->authorize('view', User::class);

        $type = $this->type;

        return view('register-form', compact('cliente', 'type'));
    }

    public function update(Cliente $cliente, Request $request)
    {
        $this->authorize('update', User::class);

        $data = $request->validate([
            'nome' => 'sometimes',
            'cpf' => 'sometimes',
            'endereco' => 'sometimes',
            'email' => ['sometimes', 'email', Rule::unique('clientes')->ignore($cliente->id)],
            'fone' => 'sometimes',
            'nascimento' => 'sometimes',
            'sexo' => 'sometimes'
        ]);

        $cliente->update($data);

        return redirect("/clientes/edit/{$cliente->id}")->with('success', 'Update successful');
    }

    public function destroy(Cliente $cliente) {
        $this->authorize('destroy', User::class);

        $cliente->delete();

        return redirect('/clientes')->with('success', 'Deleted successfully!');
    }
}
