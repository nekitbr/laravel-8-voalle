<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();

            $table->string('descricao');
            $table->bigInteger('cod_barras')->unique();
            $table->integer('preco_compra');
            $table->integer('preco_venda');
            $table->set('moeda_compra',['BRL', 'USD']);
            $table->integer('quantidade');  

            $table->softDeletes();
            $table->timestamps();
        });
        
        for ($i=0; $i < 100; $i++) { 
            \App\Models\Produto::create([
                'descricao' => 'desc_' . $i,
                'cod_barras' => strval(random_int(1111111111111, 9999999999999)),
                'preco_compra' => strval(random_int(11111, 77777)),
                'preco_venda' => strval(random_int(22222, 99999)),
                'moeda_compra' => $i % 3 ? 'BRL' : 'USD',
                'quantidade' => strval(random_int(111, 999)),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
