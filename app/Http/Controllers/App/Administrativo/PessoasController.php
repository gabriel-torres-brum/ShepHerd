<?php

namespace App\Http\Controllers\App\Administrativo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\PessoasValidateRequest;

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
        return view('app.Administrativo.list-pessoas', compact('pessoas'));
    }
    public function create()
    {
        $cargos = Cargo::all();
        $estadosCivis  = EstadoCivil::all();
        return view('app.Administrativo.create-pessoas', compact('cargos', 'estadosCivis'));
    }

    public function update(PessoasValidateRequest $request)
    {
        if ($request->id) {
            $pessoa = Pessoa::find($request->id);
            $pessoa->fill($request->all());
        } else {
            $pessoa = Pessoa::create($request->all());
        }
        if ($pessoa->save()) return redirect()->route('administrativo.pessoas.list');

        return redirect()->back()->withErrors('Verifique os dados inseridos e tente novamente.');
    }

    public function edit(Request $request)
    {
        $pessoa = Pessoa::find($request->id);
        
        if (! $pessoa) return redirect()->route('administrativo.pessoas.list')->withErrors('Pessoa não cadastrada no sistema');

        $cargos = Cargo::all();
        $estadosCivis = EstadoCivil::all();

        return view('app.Administrativo.edit-pessoas', compact('pessoa', 'cargos', 'estadosCivis'));
    }

    public function delete(Request $request)
    {
        if (! Auth::user()->admin) return redirect()->back()->withErrors('Não permitido');

        if (Pessoa::find($request->id)->delete()) return redirect()->route('administrativo.pessoas.list');

        return redirect()->back()->withErrors('Erro ao excluir pessoa');
    }
}
