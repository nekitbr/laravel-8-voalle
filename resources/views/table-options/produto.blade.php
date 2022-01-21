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
        <a href="/produtos/new">
            <button class="rounded px-2 py-4 mb-4 bg-blue-300">
                Novo Produto
            </button>
        </a>
    </div>
    <thead>
        <tr>
            <th>Cod.</th>
            <th>Descricao</th>
            <th>Compra</th>
            <th>Venda</th>
            <th>Quantidade</th>
            <th>Acoes</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto )
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->moeda_compra === 'BRL' ? 'R$ ' : 'US$ '}} {{ $produto->preco_compra }}</td>
                <td>R$ {{ $produto->preco_venda }}</td>
                <td>{{ $produto->quantidade }}</td>
                <td class="flex justify-between mx-4">
                    <a href="/produtos/edit/{{$produto->id}}">
                        <button class="rounded bg-yellow-400 py-1 px-2">Edit</button>
                    </a>
                    <form action="/produtos/{{$produto->id}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="rounded bg-red-500 py-1 px-2"
                            type="submit" 
                            onclick="return confirm('Are you sure you want to delete product {{$produto->descricao}}?')">Delete</button>	
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>