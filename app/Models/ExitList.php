<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExitList extends Model
{
    use HasFactory;

    protected $fillable = ['func_nome', 'func_produto', 'func_quant'];
}
