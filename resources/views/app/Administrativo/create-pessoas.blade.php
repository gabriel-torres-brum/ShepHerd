@extends('layout.common')

@section('title', 'Adicionar Pessoa')

@section('content')

<form method="POST"
   class="form-control border border-base-content border-opacity-30 md:p-10 p-4 py-6 rounded-md bg-base-200 text-base-content shadow-xl font-medium"
   action="{{ route('administrativo.pessoas.update') }}">
   @method('PUT')
   @csrf
   <div class="divider font-semibold">
      Informações Pessoais
   </div>
   <div class="grid gap-6 mb-6 lg:grid-cols-2">
      <div>
         <label class="label" for="nome">Nome</label>
         <input class="input input-bordered input-primary w-full text-neutral bg-slate-50 dark:bg-slate-200" type="text" id="nome"
            value="{{ old("nome") }}" name="nome">
      </div>
      <div>
         <label class="label" for="data_nascimento">Data de Nascimento</label>
         <input class="input input-bordered input-primary w-full text-neutral bg-slate-50 dark:bg-slate-200"
            type="date" id="data_nascimento" value="{{ old("data_nascimento") }}" name="data_nascimento">
      </div>
      <div>
         <label class="label" for="estado_civil_id">Estado Civil</label>
         <select class="select select-bordered select-primary w-full text-neutral bg-slate-50 dark:bg-slate-200" value="{{ old("estado_civil_id") }}" name="estado_civil_id"
            id="estado_civil_id">
            @foreach ($estadosCivis as $estadoCivil)
            <option value="{{ $estadoCivil->id }}">{{ $estadoCivil->estado_civil }}</option>
            @endforeach
         </select>
      </div>
   </div>
   <div class="divider font-semibold">
      Família
   </div>
   <div class="grid gap-6 mb-6 lg:grid-cols-2">
      <div>
         <label class="label" for="nome_pai">Nome do pai</label>
         <input class="input input-bordered input-primary rounded-md w-full text-neutral bg-slate-50 dark:bg-slate-200" type="text"
            id="nome_pai" value="{{ old("nome_pai") }}" name="nome_pai">
      </div>
      <div>
         <label class="label" for="nome_mae">Nome da mãe</label>
         <input class="input input-bordered input-primary rounded-md w-full text-neutral bg-slate-50 dark:bg-slate-200" type="text"
            id="nome_mae" value="{{ old("nome_mae") }}" name="nome_mae">
      </div>
   </div>

   <div class="divider font-semibold">
      Ministerial
   </div>

   <div class="grid gap-6 mb-6 lg:grid-cols-2">
      <div>
         <label class="label" for="igreja_origem">Igreja de Origem</label>
         <input class="input input-bordered input-primary rounded-md w-full text-neutral bg-slate-50 dark:bg-slate-200" type="text"
            id="igreja_origem" value="{{ old("igreja_origem") }}" name="igreja_origem">
      </div>
      <div>
         <label class="label" for="cargo_id">Cargo</label>
         <select class="select select-bordered select-primary w-full text-neutral bg-slate-50 dark:bg-slate-200" value="{{ old("cargo_id") }}" name="cargo_id"
            id="cargo_id">
            @foreach ($cargos as $cargo)
            <option value="{{ $cargo->id }}">{{ $cargo->cargo }}</option>
            @endforeach
         </select>
      </div>
      <div>
         <label class="label" for="dizimista">Dizimista?</label>
         <select class="select select-bordered select-primary w-full text-neutral bg-slate-50 dark:bg-slate-200" value="{{ old("dizimista") }}" name="dizimista"
            id="dizimista">
            <option value="0">Não</option>
            <option value="1">Sim</option>
         </select>
      </div>
      <div>
         <label class="label" for="dizimista">Batizado(a)?</label>
         <select class="select select-bordered select-primary w-full text-neutral bg-slate-50 dark:bg-slate-200" value="{{ old("batizado") }}" name="batizado"
            id="batizado">
            <option value="0">Não</option>
            <option value="1">Sim</option>
         </select>
      </div>
      <div>
         <label class="label" for="data_batismo">Data de Batismo</label>
         <input class="input input-bordered input-primary rounded-md w-full text-neutral bg-slate-50 dark:bg-slate-200" type="date"
            id="data_batismo" value="{{ old("data_batismo") }}" name="data_batismo">
      </div>
   </div>

   <button class="btn btn-primary w-full">
      Incluir
   </button>

</form>


@endsection