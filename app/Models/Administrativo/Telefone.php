<?php

namespace App\Models\Administrativo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = "ad_telefones";

    protected $fillable = [
        'ddd',
        'numero'
    ];
}
