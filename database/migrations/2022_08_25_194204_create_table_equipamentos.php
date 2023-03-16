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
        Schema::create('equipamento', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', $precision = '100')->nullable(false);
            $table->integer('id_categoria')->nullable(false);
            $table->integer('id_subcategoria')->nullable(false);
            $table->integer('id_marca')->nullable(false);
            $table->integer('id_modelo')->nullable(false);
            $table->integer('estoque')->nullable(false);
            $table->integer('estoquemin')->nullable(false);
            $table->double('valor')->nullable(false);
            $table->integer('patrimonio')->nullable(true);
            $table->string('hostname', $precision = '30')->nullable(true);
            $table->string('nserie', $precision = '60')->nullable(true);
            $table->string('qtmemoria', $precision = '10')->nullable(true);
            $table->integer('ssd')->nullable(false);
            $table->integer('tipo')->nullable(false);
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
        Schema::dropIfExists('equipamento');
    }
};
