<?php

namespace App\Http\Controllers\app\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    public function list()
    {
        return view('app.Administrativo.Pessoas.listagem-pessoas');
    }
}
