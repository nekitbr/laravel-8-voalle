<div>
    <h1>Comprador</h1>
        @foreach ($buyer as $key => $value)
            <li>{{ $key }}: {{ $value }}</li>
        @endforeach
    <h1>Vendedor</h1>
        @foreach ($seller as $key => $value)
            <li>{{ $key }}: {{ $value }}</li>
        @endforeach
    <h1>Produto</h1>
        @foreach ($sellable as $key => $value)
            <li>{{ $key }}: {{ $value }}</li>
        @endforeach
</div>



