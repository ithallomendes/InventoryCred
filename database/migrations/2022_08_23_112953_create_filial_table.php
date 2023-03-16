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
        Schema::create('filial', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->nullable(false);
            $table->string('regional', $precision=30)->nullable(false);
            $table->string('cep', $precision=10)->nullable(false);
            $table->string('endereco', $precision=120)->nullable(false);
            $table->string('bairro', $precision=30)->nullable(false);
            $table->string('cidade', $precision=30)->nullable(false);
            $table->string('estado', $precision=2)->nullable(false);
            $table->integer('cnpj')->nullable(false);
            $table->integer('ie')->nullable(false);
            $table->string('gerente', $precision=20)->nullable(false);
            $table->string('telgerente', $precision=20)->nullable(false);
            $table->string('inauguracao')->nullable(false);
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
        Schema::dropIfExists('filial');
    }
};
