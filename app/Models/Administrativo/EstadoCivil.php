<?php

namespace App\Models\Administrativo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    protected $table = "ad_estado_civil";
    
    protected $fillable = [
        "estado_civil"
    ];
}
