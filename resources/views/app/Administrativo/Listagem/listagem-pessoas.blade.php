@extends('layout.master')

@section('title', 'Listagem Pessoas')

@section('content')
    <section class="p-6 h-screen w-full max-w-5xl dark:bg-slate-700 bg-gray-50 overflow-y-auto shadow">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-2 md:space-y-0 py-6 md:pl-3">
            <h1 class="text-xl dark:text-white text-slate-700 font-bold text-center">Listagem de Pessoas</h1>
            <form action="{{ route('app.administrativo.pessoas.list') }}" class="form-control">
                <div class="input-group input-group-sm">
                    <button type="submit" class="btn btn-ghost btn-square btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-[3px] text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <input type="text" name="pesquisa" placeholder="Pesquisar..."
                        class="input input-accent input-bordered input-sm">
                </div>
            </form>
        </div>
        @if ((new \Jenssegers\Agent\Agent())->isDesktop())
            <div class="dark:bg-white bg-slate-900 rounded-lg hidden md:block p-6">
                <table class="w-full">
                    <thead class="dark:text-white dark:bg-slate-800 bg-white text-slate-800">
                        <tr>
                            <th class="p-6 text-sm font-semibold tracking-wide text-left truncate">Nome</th>
                            <th class="p-6 text-sm font-semibold tracking-wide text-left truncate">Cargo</th>
                            <th class="p-6 text-sm font-semibold tracking-wide text-left truncate">Idade</th>
                            <th class="p-6 text-sm font-semibold tracking-wide text-left truncate">Dizimista</th>
                            <th class="p-6 text-sm font-semibold tracking-wide text-left truncate">Batizado(a)</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-center truncate">Menu</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($pessoas as $key => $pessoa)
                            <tr class="dark:bg-white bg-slate-700 border-y border-gray-500">
                                <td class="p-6 text-sm font-semibold text-teal-600 whitespace-nowrap truncate">
                                    {{ $pessoa->nome }}
                                </td>
                                <td class="p-6 text-sm text-gray-700 whitespace-nowrap">
                                    <span
                                        class="p-2 text-xs font-semibold uppercase tracking-wider dark:text-sky-400 dark:bg-sky-700 text-sky-700 bg-sky-200 rounded-lg bg-opacity-50">
                                        {{ $pessoa->cargo->cargo }}
                                    </span>
                                </td>
                                <td class="p-6 text-sm font-semibold text-cyan-700 whitespace-nowrap">
                                    {{ $pessoa->data_nascimento->age }} anos
                                </td>
                                <td class="p-6 text-sm text-gray-700 whitespace-nowrap">
                                    <p
                                        class="font-semibold {{ $pessoa->dizimista ? 'text-green-600' : 'text-rose-600' }}">
                                        {{ $pessoa->dizimista ? 'Sim' : 'Não' }}
                                    </p>
                                </td>
                                <td class="p-6 text-sm text-gray-700 whitespace-nowrap">
                                    <p class="font-semibold {{ $pessoa->batizado ? 'text-green-600' : 'text-rose-600' }}">
                                        {{ $pessoa->batizado ? 'Sim' : 'Não' }}
                                    </p>
                                </td>
                                <td class="p-2 text-sm text-gray-700 whitespace-nowrap">
                                    <a class="w-full btn btn-ghost rounded-md font-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pt-4 text-white">
                    {{ $pessoas->appends([
                            'pesquisa' => request()->get('pesquisa', ''),
                        ])->links() }}
                </div>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
                <div class="py-2">
                    {{ $pessoas->appends([
                            'pesquisa' => request()->get('pesquisa', ''),
                        ])->links() }}
                </div>
                @foreach ($pessoas as $key => $pessoa)
                    <a href="#" class="bg-white hover:bg-slate-300 space-y-3 p-4 rounded-lg shadow">
                        <div class="flex justify-between space-x-2 items-center">
                            <p class="text-slate-800 font-bold truncate">{{ $pessoa->nome }}</p>
                            <p
                                class="grid place-items-center p-2 text-xs font-semibold uppercase tracking-wider text-cyan-700 bg-sky-200 ring-2 ring-sky-600/40 rounded-lg bg-opacity-50">
                                {{ $pessoa->cargo->cargo }}
                            </p>
                        </div>
                        <hr class="border rounded-full border-slate-300" />
                        <div class="flex justify-between font-semibold">
                            <div class="flex flex-col space-y-1">
                                <div class="flex justify-between font-bold text-xs text-slate-600">
                                    <p class="{{ $pessoa->dizimista ? 'text-green-600' : 'text-rose-600' }}">
                                        {{ $pessoa->dizimista ? 'Dizimista' : 'Não Dizimista' }}
                                    </p>
                                </div>
                                <div class="flex justify-between font-bold text-xs text-slate-600">
                                    <p class="{{ $pessoa->batizado ? 'text-cyan-600' : 'text-rose-600' }}">
                                        {{ $pessoa->batizado ? 'Batizado(a)' : 'Não Batizado(a)' }}</p>
                                </div>
                            </div>
                            <p class="text-yellow-600">
                                {{ $pessoa->data_nascimento->age }} anos
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif

    </section>
@endsection
