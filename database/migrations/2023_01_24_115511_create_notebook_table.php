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
        Schema::create('notebook', function (Blueprint $table) {
            $table->id();
            $table->string('nome_colaborador', $precision='80');
            $table->integer('patrimonio')->nullable(false);
            $table->string('num_serie', $precision='30');
            $table->integer('id_marca')->nullable(false);
            $table->integer('id_modelo')->nullable(false);
            $table->string('hostname', $precision='15');
            $table->integer('tipo_colaborador')->nullable(false);
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
        Schema::dropIfExists('notebook');
    }
};
