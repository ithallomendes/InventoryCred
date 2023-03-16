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
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->string('fornecedor', $precision=60)->nullable(false);
            $table->biginteger('cnpj')->nullable(false);
            $table->integer('ie')->nullable(false);
            $table->string('cep', $precision=10)->nullable(false);
            $table->string('endereco', $precision=120)->nullable(false);
            $table->string('bairro', $precision=30)->nullable(false);
            $table->string('cidade', $precision=30)->nullable(false);
            $table->string('estado', $precision=2)->nullable(false);
            $table->string('contato', $precision=30)->nullable(false);
            $table->string('telefone', $precision=20)->nullable(false);
            $table->string('email', $precision=30)->nullable(false);
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
        Schema::dropIfExists('fornecedor');
    }
};
