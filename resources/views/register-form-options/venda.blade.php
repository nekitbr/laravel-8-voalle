@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<form action="/vendas/new" method="post">
  @method('PUT')
  @csrf
  <div class="mt-4">
    <div>
      <label class="block" for="product_id">Codigo do Produto<label>
          <input type="number" name="product_id" id="product_code" placeholder="{{ $produto->id ?? 'Codigo do Produto' }}"
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" 
            onkeyup="GetDetail(this.value, this.name)" onchange="GetDetail(this.value, this.name)">
    </div>
    <div class="mt-4">
      <label class="block" for="descricao">Descricao<label>
          <input type="text" name="descricao" id="descricao" placeholder="{{ $produto->descricao ?? 'Descricao' }}" value="{{ $produto->descricao ?? '' }}"
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
    </div>
    <div class="mt-4">
      <label class="block" for="preco_venda">Preco de venda<label>
          <input type="number" name="preco_venda" id="preco_venda" placeholder="{{ $produto->preco_venda ?? 'Preco de venda' }}" value="{{ $produto->preco_venda ?? '' }}"
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
    </div>
    <div class="mt-4">
      <label class="block" for="cliente_id">Codigo do Cliente<label>
          <input type="number" name="cliente_id" id="cliente_id" placeholder="{{ $cliente->id ?? 'Codigo do Cliente' }}"
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" 
            onkeyup="GetDetail(this.value, this.name)" onchange="GetDetail(this.value, this.name)">
    </div>
    <div class="mt-4">
      <label class="block" for="cliente_nome">Cliente<label>
          <input type="text" name="cliente_nome" id="cliente_nome" placeholder="{{ $cliente->nome ?? 'Cliente' }}" value="{{ $cliente->nome ?? '' }}"
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
    </div>
    <div class="mt-4">
      <label class="block" for="cliente_cpf">CPF do Cliente<label>
          <input type="number" name="cliente_cpf" id="cliente_cpf" placeholder="{{ $cliente->cpf ?? 'CPF do Cliente' }}" value="{{ $cliente->cpf ?? '' }}"
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
    </div>
    <div class="flex">
      <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"
          type="submit"
          >Efetuar venda</button>
    </div>
  </div>
</form>

<script>
  function GetDetail(value, name) {
    if (value.length == 0) {
      document.getElementById("descricao").value = ""
      document.getElementById("preco_venda").value = ""
      document.getElementById("cliente_nome").value = ""
      document.getElementById("cliente_cpf").value = ""
    } else {
      let xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          let data = JSON.parse(this.responseText)

          console.log(data)
          if (name === 'product_id') {
            document.getElementById("descricao").value = data.descricao
            document.getElementById("preco_venda").value = data.preco_venda
          } else if (name === 'cliente_id') {
            document.getElementById("cliente_nome").value = data.nome
            document.getElementById("cliente_cpf").value = data.cpf
          }
        }
      };

      // xhttp.open("GET", "filename", true);
      if (name === 'product_id') {
        xmlhttp.open("GET", "api/getProduto/" + value, true);
      } else if (name === 'cliente_id') {
        xmlhttp.open("GET", "api/getCliente/" + value, true);
      }

      // Sends the request to the server
      xmlhttp.send();
    }
  }
</script>