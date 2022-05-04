<?php

namespace App\Http\Controllers\app\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrativo\Pessoa;


class PessoasController extends Controller
{
    public function list(Request $request)
    {
        $pesquisa = $request->pesquisa;
        $pessoas = (new Pessoa)->where(function ($query) use ($pesquisa) {
            if ($pesquisa) {
                $query->where('nome', 'LIKE', "%{$pesquisa}%");
            }
        })->paginate(2);
        return view('app.Administrativo.Listagem.listagem-pessoas', compact('pessoas'));
    }
}
