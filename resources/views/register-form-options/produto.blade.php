@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ isset($produto) ? '/produtos/edit/' . $produto->id : '/produtos/new' }}" method="post">
    @if (isset($produto))
        @method('PATCH')
    @else
        @method('PUT')
    @endif
    @csrf
    <div class="mt-4">
        <div>
            <label class="block" for="descricao">Descricao<label>
                    <input type="text" name="descricao" placeholder="{{ $produto->descricao ?? 'Descricao' }}" value="{{ $produto->descricao ?? '' }}"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div>
        <div class="mt-4">
            <label class="block" for="cod_barras">Codigo de Barras<label>
                    <input type="text" name="cod_barras" placeholder="{{ $produto->cod_barras ?? 'Codigo de Barras' }}" value="{{ $produto->cod_barras ?? '' }}"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div>
        <div class="mt-4">
            <label class="block" for="preco_compra">Preco de compra<label>
                    <input type="number" name="preco_compra" placeholder="{{ $produto->preco_compra ?? 'Preco de Compra' }}"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"\
                        value="{{ $produto->preco_compra ?? 'Preco de Compra' }}">
                    <label class="block" for="role">Moeda de compra<label><br>
                        <select class="w-1/4 px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                                name="moeda_compra">
                            @if (isset($produto->moeda_compra))
                                <option selected hidden value="{{ $produto->moeda_compra }}">{{ $produto->moeda_compra }}</option>
                            @endif
                            <option value="BRL">BRL</option>
                            <option value="USD">USD</option>
                        </select>
        </div>
        <div class="mt-4">
            <label class="block" for="preco_venda">Preco de venda<label>
                <input type="number" name="preco_venda" placeholder="{{ $produto->preco_venda ?? 'Preco de Venda' }}"
                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                    value="{{ $produto->preco_venda ?? 'Preco de Venda' }}">

        </div>
        <div class="mt-4">
            <label class="block" for="quantidade">Quantidade<label>
                <input type="number" name="quantidade" placeholder="{{ $produto->quantidade ?? 'Quantidade' }}"
                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                    value="{{ $produto->quantidade ?? 'Quantidade' }}">

        </div>
        <div class="flex">
            <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"
                    type="submit"
                    >Salvar registro</button>
        </div>
    </div>
</form>