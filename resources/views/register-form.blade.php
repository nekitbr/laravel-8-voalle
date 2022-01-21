<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ ucfirst($type) ?? ''}}</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
	<!--Replace with your tailwind.css once created-->


	<!--Regular Datatables CSS-->
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--Responsive Extension Datatables CSS-->
	<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
            <div>
				@if (Auth::user()->id === ($user->id ?? null))
					<h3 class="text-2xl font-bold text-center">Editando a si mesmo</h3>
				@elseif (isset($type) && $type === 'venda')
					<h3 class="text-2xl font-bold text-center">Nova venda</h3>
				@else
					<h3 class="text-2xl font-bold text-center">{{ $cliente ?? $user ?? $produto ?? null ? 'Editando ' . $type . ' "' . ucfirst($cliente->nome ?? $user->name ?? $produto->id) . '"': 'Novo '.$type }}</h3>
				@endif
                @if (isset($type) && $type === 'produto')
					<a href="/produtos">
						<button class="border border-black rounded bg-gray-300 bold px-2 py-1">
							« Voltar
						</button>
					</a>
				@elseif (isset($type) && $type === 'cliente')
					<a href="/clientes">
						<button class="border border-black rounded bg-gray-300 bold px-2 py-1">
							« Voltar
						</button>
					</a>
				@elseif (isset($type) && $type === 'admin')
					<a href="/admins">
						<button class="border border-black rounded bg-gray-300 bold px-2 py-1">
							« Voltar
						</button>
					</a>
				@elseif (isset($type) && $type === 'venda')
					<a href="/vendas">
						<button class="border border-black rounded bg-gray-300 bold px-2 py-1">
							« Voltar
						</button>
					</a>
				@else
					<a href="/{{ Auth::check() ? 'home' : 'dashboard' }}">
						<button class="border border-black rounded bg-gray-300 bold px-2 py-1">
							« Voltar
						</button>
					</a>
				@endif
            </div>
            @include('register-form-options.' . $type)
        </div>
    </div>
</body>

</html>