<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntradaProduto extends Model
{
    use HasFactory;
    protected $table = "entrada_produto";
    protected $fillable = ["id_usuario","id_fornecedor","notafiscal","data_emissao","valor"];
}
