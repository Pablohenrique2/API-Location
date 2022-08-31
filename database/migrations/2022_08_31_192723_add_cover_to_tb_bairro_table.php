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
        Schema::table('tb_bairro', function (Blueprint $table) {
            $table->foreign('codigo_municipio')->references('id')->on('tb_municipio')->onDelete('cascade')
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
        Schema::table('tb_bairro', function (Blueprint $table) {
            $table->dropColumn('codigo_municipio');
           
        });
    }
};
