<?php

namespace App\Models\Administrativo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pessoa extends Model
{
    protected $table = 'ad_pessoas';

    protected $fillable = [
        'cargo_id',
        'estado_civil_id',
        'nome',
        'data_nascimento',
        'nome_pai',
        'nome_mae',
        'dizimista',
        'igreja_origem',
        'data_batismo'
    ];

    protected $casts = [
        'data_nascimento' => 'date',
        'data_batismo' => 'date',
    ];


    public function estadoCivil()
    {
        return $this->hasOne(EstadoCivil::class, 'id', 'estado_civil_id');
    }

    public function cargo()
    {
        return $this->hasOne(Cargo::class, 'id', 'cargo_id');
    }

    public function telefones()
    {
        return $this->belongsToMany(Telefone::class, 'ad_pessoas_telefones');
    }
}
