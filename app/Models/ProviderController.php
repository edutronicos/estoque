<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderController extends Model
{
    use HasFactory;

    protected $fillable = ['empresa', 'contato', 'telefone', 'email'];
}
