@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
    <div class="flex align-middle justify-between">
        <a href="/home">
            <button class="border border-black rounded bg-gray-300 bold px-2 py-1">
                « Voltar
            </button>
        </a>
        <a href="/vendas/new">
            <button class="rounded px-2 py-4 mb-4 bg-blue-300">
                Nova Venda
            </button>
        </a>
    </div>
    <thead>
        <tr>
            <th>Cod.</th>
            <th>Produto</th>
            <th>Cliente</th>
            <th>Vendedor</th>
            <th>Data (DDMMYYYY)</th>
            <th>Acoes</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vendas as $venda )
            <tr>
                <td>{{ $venda->id }}</td>
                <td>{{ json_decode($venda->sellable)->descricao }}</td>
                <td>{{ json_decode($venda->cliente_info)->nome }}</td>
                <td>{{ json_decode($venda->seller_info)->name }}</td>
                <td>{{ date_format(date_create(json_decode($venda)->created_at), "d/m/Y") }}</td>
                <td class="flex justify-center">
                    <a href="/vendas/pdf/{{$venda->id}}">
                        <button class="rounded mx-auto w-full bg-yellow-400 py-2 px-8">PDF</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>