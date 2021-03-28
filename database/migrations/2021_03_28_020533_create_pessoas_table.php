<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function(Blueprint $table){
            $table->id();
            
            $table->string('nome');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('endereço');
            $table->string('cep');
            $table->date('nascimento');

        });

        Schema::create('contatos', function(Blueprint $table){
            $table->id();
            $table->integer('id_info');
            $table->string('tipo');
            $table->string('contato');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos');
        Schema::dropIfExists('info');

    }
}
