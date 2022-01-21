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
        <a href="/clientes/new">
            <button class="rounded px-2 py-4 mb-4 bg-blue-300">
                Novo Cliente
            </button>
        </a>
    </div>
    <thead>
        <tr>
            <th>Cod.</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereco</th>
            <th>Sexo</th>
            <th>CPF</th>
            <th>Acoes</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente )
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->fone }}</td>
                <td>{{ $cliente->endereco }}</td>
                <td>{{ $cliente->sexo }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td class="flex justify-between mx-4">
                    <a href="/clientes/edit/{{$cliente->id}}">
                        <button class="rounded bg-yellow-400 py-1 px-2">Edit</button>
                    </a>
                    <form action="/clientes/{{$cliente->id}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="rounded bg-red-500 py-1 px-2"
                            type="submit" 
                            onclick="return confirm('Are you sure you want to delete buyer {{$cliente->nome}}?')">Delete</button>	
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>