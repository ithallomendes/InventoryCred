<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filial extends Model
{
    use HasFactory;
    protected $table = 'filial';
    protected $fillable=['filial','regional','cep','endereco','bairro','cidade','estado','coordenador','cnpj','ie','gerente','telgerente','inauguracao'];
}
