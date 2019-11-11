<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel', function (Blueprint $table) {
            $table->increments('id');           
            $table->string('logradouro', 45);
            $table->integer('numero')->nullable();
            $table->string('complemento', 200)->nullable();
            $table->string('bairro', 90);
            $table->string('municipio', 200);
            $table->string('estado', 2);
            $table->string('cep', 9);

            $table->integer('id_tipo_imovel')->unsigned();
            $table->foreign('id_tipo_imovel')->references('id')->on('tipo_imovel');

            $table->integer('id_proprietario')->unsigned();
            $table->foreign('id_proprietario')->references('id')->on('proprietario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imovel');
    }
}
