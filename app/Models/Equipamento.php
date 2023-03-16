<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;
    protected $table = 'equipamento';
    protected $fillable = ['descricao','id_categoria','id_subcategoria','id_marca','id_modelo','estoque','estoquemin','valor'];
    
}
