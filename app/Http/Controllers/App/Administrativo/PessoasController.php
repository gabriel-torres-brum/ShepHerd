<?php

namespace App\Http\Controllers\App\Administrativo;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Administrativo\Pessoa;
use App\Models\Administrativo\Cargo;
use App\Models\Administrativo\EstadoCivil;


class PessoasController extends Controller
{
    public function list(Request $request)
    {
        $pesquisa = $request->pesquisa;
        $pessoas = Pessoa::where(function ($query) use ($pesquisa) {
            if ($pesquisa) $query->where('nome', 'LIKE', "%{$pesquisa}%");
        })->paginate(5);
        return view('app.Administrativo.ListPessoas', compact('pessoas'));
    }
    public function create()
    {
        $cargos = Cargo::all();
        $civil  = EstadoCivil::all();
        return view('app.Administrativo.CreatePessoas', compact('cargos', 'civil'));
    }

    public function handleCreate(Request $request)
    {
        if (Pessoa::create($request->all())->save()) {
            return redirect()->route('administrativo.pessoas.list');
        } else {
            return redirect()->back()->withErrors('Verifique os dados inseridos e tente novamente.');
        }
    }
    
    public function delete(Request $request)
    {
        if (Pessoa::where('id', $request->id)->delete()) {
            return redirect()->route('administrativo.pessoas.list');
        } else {
            return redirect()->back()->withErrors('Erro ao excluir pessoa');
        }
    }
}
