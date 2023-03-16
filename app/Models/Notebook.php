<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;
    protected $table = 'notebook';
    protected $fillable = ['nome_colaborador', 'patrimonio','num_serie','id_marca','id_modelo','usuario_rede','hostname','tipo_colaborador',];
}
