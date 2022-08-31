<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_endereco', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('codigo_pessoa');
            $table->bigInteger('codigo_bairro');
            $table->string('nome_rua', 256);
            $table->string('numero', 10);
            $table->string('complemento', 20);
            $table->string('cep', 10);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_endereco');
    }
};
