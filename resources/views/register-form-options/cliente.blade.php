@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ isset($cliente) ? '/clientes/edit/' . $cliente->id : '/clientes/new' }}" method="post">
    @if (isset($cliente))
        @method('PATCH')
    @else
        @method('PUT')
    @endif
    @csrf
    <div class="mt-4">
        <div>
            <label class="block" for="nome">Nome<label>
                    <input type="text" name="nome" placeholder="{{ $cliente->nome ?? 'Nome' }}" value="{{ $cliente->nome ?? '' }}"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div>
        <div class="mt-4">
            <label class="block" for="email">Email<label>
                    <input type="email" name="email" placeholder="{{ $cliente->email ?? 'Email' }}" value="{{ $cliente->email ?? '' }}"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div>
        <div class="mt-4">
            <label class="block" for="fone">Fone<label>
                    <input type="tel" name="fone" placeholder="{{ $cliente->fone ?? 'Fone' }}" value="{{ $cliente->fone ?? '' }}"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div>
        <div class="mt-4">
            <label class="block" for="cpf">CPF<label>
                    <input type="number" name="cpf" placeholder="{{ $cliente->cpf ?? 'CPF' }}" value="{{ $cliente->cpf ?? '' }}"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div>
        <div class="mt-4">
            <label class="block" for="nascimento">Nascimento<label>
                    <input type="date" name="nascimento" placeholder="{{ $cliente->nascimento ?? 'Nascimento' }}" value="{{ $cliente->nascimento ?? '' }}"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div>
        <div class="mt-4">
            <label class="block" for="sexo">Sexo<label><br>
            <select class="w-1/4 px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" 
                    name="sexo">
                @if (isset($cliente->sexo))
                    <option selected hidden value="{{ $cliente->sexo }}">{{ $cliente->sexo }}</option>
                @endif
                <option value="M">M</option>
                <option value="F">F</option>
                <option>Outro</option>
            </select>
        </div>
        <div class="mt-4">
            <label class="block" for="endereco">Endereco<label>
                    <input type="text" name="endereco" placeholder="{{ $cliente->endereco ?? 'Endereco' }}" value="{{ $cliente->endereco ?? '' }}"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div>
        <div class="flex">
            <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"
                    type="submit"
                    >Salvar registro</button>
        </div>
    </div>
</form>