<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();

            $table->json('sellable');
            $table->json('cliente_info');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->json('seller_info');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->softDeletes();
            $table->timestamps();
        });

        for ($i=1; $i < 101; $i++) { 
            $venda = new \App\Models\Venda;
            $venda->sellable = \App\Models\Produto::find($i)->toJson();
            $venda->cliente_info = \App\Models\Cliente::find($i)->toJson();
            $venda->seller_info = \App\Models\User::find($i)->toJson();
            $venda->user_id = $i;
            $venda->cliente_id = $i;
            $venda->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
