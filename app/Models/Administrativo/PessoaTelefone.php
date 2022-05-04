<?php

namespace App\Models\Administrativo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaTelefone extends Model
{
    public $timestamps = false;
    
    protected $table = 'ad_pessoas_telefones';

    protected $fillable = [
        'pessoa_id',
        'telefone_id',
    ];
}
