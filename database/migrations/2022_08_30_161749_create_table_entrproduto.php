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
        Schema::create('entrada_produto', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario')->nullable('false');
            $table->integer('id_fornecedor')->nullable('false');
            $table->integer('notafiscal')->nullable('false');
            $table->date('data_emissao')->nullable('false');
            $table->double('valor')->nullable('false');;
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
        Schema::dropIfExists('entrada_produto');
    }
};
