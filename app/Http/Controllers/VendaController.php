<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class VendaController extends Controller
{
    protected $type = 'venda';

    public function index() {
        $this->authorize('view', User::class);
        
        $vendas = Venda::paginate(1000);
        $type = $this->type;

        return view('table', compact('vendas', 'type'));
    }

    public function create() {
        $this->authorize('view', User::class);

        $type = $this->type;

        return view('register-form', compact('type'));
    }

    public function store(Request $request) {
        $this->authorize('view', User::class);
        
        $type = $this->type;

        $request->validate([
            'product_id' => 'required',
            'cliente_id' => 'required'
        ]);

        $data = [
            'sellable' => Produto::find($request->product_id)->toJson(),
            'cliente_info' => Cliente::find($request->cliente_id)->toJson(),
            'cliente_id' => $request->cliente_id,
            'seller_info' => User::find(Auth::user()->id)->toJson(),
            'user_id' => Auth::user()->id,
        ];

        Venda::create($data);

        return redirect('/vendas')->with('success', 'Sale made successfully!');
    }

    public function exportPDF(Venda $venda) {
        $date = now()->format('Y-m-d_H:i');
        
        $buyer = json_decode($venda->cliente_info);
        unset($buyer->id, $buyer->sexo, $buyer->created_at, $buyer->updated_at, $buyer->deleted_at, $buyer->nascimento);

        $seller = json_decode($venda->seller_info);
        unset($seller->id, $seller->created_at, $seller->deleted_at, $seller->updated_at, $seller->email_verified_at);
        // dd($seller, $venda);

        $sellable = json_decode($venda->sellable);
        unset($sellable->id, $sellable->cod_barras, $sellable->created_at, $sellable->deleted_at, $sellable->quantidade, $sellable->updated_at, $sellable->moeda_compra, $sellable->preco_compra);

        $pdf = PDF::loadView('export-sale-pdf', compact('buyer', 'seller', 'sellable'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('test.pdf');

        return abort(404);
    }
 
    public function getProduto(Produto $product_id) {
        return($product_id);
    }

    public function getCliente(Cliente $cliente_id) {
        return($cliente_id);
    }
}
