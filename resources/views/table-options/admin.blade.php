@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="flex align-middle justify-between">
    <a href="/home">
        <button class="border border-black rounded bg-gray-300 bold px-2 py-1">
            « Voltar
        </button>
    </a>
    <a href="/admins/new">
        <button class="rounded px-2 py-4 mb-4 bg-blue-300">
            Novo Usuario
        </button>
    </a>
</div>
<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Cargo</th>
            <th>Status</th>
            <th>Acoes</th>
            <th>Data de Inicio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admins as $admin )
            <tr>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->role }}</td>
                <td class="{{ $admin->email_verified_at ? 'text-green-600' : 'text-red-600' }}">{{ $admin->email_verified_at ? 'active' : 'inactive' }}</td>
                <td class="flex justify-between mx-4">
                    <a href="/admins/edit/{{$admin->id}}">
                        <button class="rounded bg-blue-500 py-1 px-2">Edit</button>
                    </a>
                    @if ($admin->id !== Auth::user()->id)
                        <form action="/admins/{{$admin->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="rounded bg-red-500 py-1 px-2"
                                type="submit" 
                                onclick="alert('Are you sure you want to delete user {{$admin->name}}?')">Delete</button>	
                        </form>
                    @endif
                </td>
                <td>{{ $admin->created_at }}</td>
            </tr>
        @endforeach
    </tbody>

</table>
