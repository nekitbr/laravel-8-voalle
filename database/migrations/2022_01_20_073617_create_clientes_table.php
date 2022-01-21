<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    protected $fillable = ['nome', 'email', 'fone', 'endereco', 'sexo', 'cpf'];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nome');
            $table->string('email')->nullable()->unique();
            $table->string('fone', 13)->nullable();
            $table->string('endereco');
            $table->date('nascimento')->nullable();
            $table->set('sexo',['M', 'F'])->nullable();
            $table->string('cpf', 11)->unique();

            $table->softDeletes();
            $table->timestamps();
        });

        for ($i=0; $i < 100; $i++) { 
            \App\Models\Cliente::create([
                'nome' => 'fake_' . $i,
                'email' => 'fake_' . $i . '@mail.com',
                'fone' => strval(random_int(1111111111111, 9999999999999)),
                'endereco' => 'endereco_' . $i,
                'nascimento' => '2002-07-17',
                'sexo' => $i % 2 ? 'F' : 'M',
                'cpf' => strval(random_int(11111111111, 99999999999)),
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
        Schema::dropIfExists('clientes');
    }
}
