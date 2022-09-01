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
        Schema::table('tb_enderecos', function (Blueprint $table) {
            $table->foreign('codigo_pessoa')->references('id')->on('tb_pessoas')->onDelete('cascade')
            ->onUpdate('CASCADE');
            $table->foreign('codigo_bairro')->references('id')->on('tb_bairros')->onDelete('cascade')
            ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_endereco', function (Blueprint $table) {
            //
        });
    }
};
