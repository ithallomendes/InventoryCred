<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $table = 'fornecedor';
    protected $fillable=['fornecedor','cnpj','ie','cep','endereco','bairro','cidade','estado','contato','telefone','email'];
}
