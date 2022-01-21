@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ isset($user) ? '/admins/edit/' . $user->id : '/admins/new' }}" method="post">
    @if (isset($user))
        @method('PATCH')
    @else
        @method('PUT')
    @endif
    @csrf
    <div class="mt-4">
        <div>
            <label class="block" for="name">Nome<label>
                    <input type="text" name="name" placeholder="{{ $user->name ?? 'Nome' }}" value="{{ $user->name ?? '' }}"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div>
        <div class="mt-4">
            <label class="block" for="email">Email<label>
                    <input type="email" name="email" placeholder="{{ $user->email ?? 'Email' }}" value="{{ $user->email ?? '' }}"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div>
        <div class="mt-4">
            <label class="block" for="password">Senha<label>
                    <input type="password" name="password" placeholder="{{ isset($user->password) ? '********' : 'Senha' }}"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div>
        @if (Auth::user()->id !== ($user->id ?? null))
            <div class="mt-4">
                <label class="block" for="role">Cargo<label><br>
                <select class="w-1/4 px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" 
                        name="role">
                    @if (isset($user->role))
                        <option selected hidden value="{{ $user->role }}">{{ ucfirst($user->role) }}</option>
                    @endif
                    <option value="admin">Admin</option>
                    <option value="translator">Tradutor</option>
                </select>
            </div>
        @endif
        <div class="flex">
            <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"
                    type="submit"
                    >Salvar registro</button>
        </div>
    </div>
</form>