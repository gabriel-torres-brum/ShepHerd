@extends('layout.master')

@section('title', 'Listagem Pessoas')

@section('content')

    <div class="flex flex-col items-center justify-between space-y-6">
        <h1 class="text-2xl flex-2 font-bold text-center">Listagem de Pessoas</h1>
        <form action="{{ route('app.administrativo.pessoas.list') }}" class="py-6 flex-1 form-control w-full">
            <div class="input-group flex md:justify-end">
                <button type="submit" class="btn bg-secondary text-secondary-content hover:bg-secondary-focus btn-square">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-[3px]" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <input type="text" name="pesquisa" placeholder="Pesquisa por nome..."
                    class="input input-bordered bg-base-content text-base-100 placeholder:text-base-100 w-full md:w-auto"
                    value={{ request('pesquisa') }}>
            </div>
        </form>
    </div>
    @if ((new \Jenssegers\Agent\Agent())->isDesktop())
        <div class="rounded-lg hidden md:block">
            <table class="w-full">
                <thead class="bg-primary text-primary-content border-b border-base-content">
                    <tr>
                        <th class="p-6 text-sm font-semibold tracking-wide text-left truncate">Nome</th>
                        <th class="p-6 text-sm font-semibold tracking-wide text-left truncate">Cargo</th>
                        <th class="p-6 text-sm font-semibold tracking-wide text-left truncate">Idade</th>
                        <th class="p-6 text-sm font-semibold tracking-wide text-left truncate">Dizimista</th>
                        <th class="p-6 text-sm font-semibold tracking-wide text-left truncate">Batizado(a)</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-center truncate">Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pessoas as $key => $pessoa)
                        <tr class="bg-secondary text-secondary-content border-b border-base-200">
                            <td class="p-6 text-sm font-semibold whitespace-nowrap truncate">
                                {{ $pessoa->nome }}
                            </td>
                            <td class="p-6 text-sm whitespace-nowrap">
                                <span
                                    class="p-2 text-xs font-semibold uppercase tracking-wider text-accent-content bg-accent rounded-full bg-opacity-75 border border-accent-content">
                                    {{ $pessoa->cargo->cargo }}
                                </span>
                            </td>
                            <td class="p-6 text-sm font-semibold whitespace-nowrap">
                                {{ $pessoa->data_nascimento->age }} anos
                            </td>
                            <td class="p-6 text-sm whitespace-nowrap">
                                <p class="font-semibold">
                                    {{ $pessoa->dizimista ? 'Sim' : 'Não' }}
                                </p>
                            </td>
                            <td class="p-6 text-sm whitespace-nowrap">
                                <p class="font-semibold">
                                    {{ $pessoa->batizado ? 'Sim' : 'Não' }}
                                </p>
                            </td>
                            <td class="p-2 text-sm text-secondary-content whitespace-nowrap">
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
            <div class="pt-4">
                {{ $pessoas->appends([
                        'pesquisa' => request()->get('pesquisa', ''),
                    ])->links('pagination::tailwind') }}
            </div>
        </div>
    @else
        <div class="z-30 flex flex-col space-y-5 md:hidden leading-4 overflow-y-scroll">
            {{ $pessoas->appends([
                    'pesquisa' => request()->get('pesquisa', ''),
                ])->links('pagination::tailwind') }}
            @foreach ($pessoas as $key => $pessoa)
                <section class="bg-secondary text-secondary-content rounded-lg shadow">
                    <div class="space-y-1.5 p-4">
                        <div class="flex space-x-2 items-center py-2">
                            <p class="font-bold truncate">{{ $pessoa->nome }}</p>
                        </div>
                        <hr class="border rounded-full border-primary-content" />
                        <div class="flex justify-between font-semibold py-2">
                            <div class="flex flex-col justify-between space-y-1">
                                <div class="flex text-secondary-content justify-start font-bold text-xs rounded">
                                    <p class="{{ $pessoa->dizimista || 'text-error' }}">
                                        {{ $pessoa->dizimista ? 'Dizimista' : 'Não Dizimista' }}
                                    </p>
                                </div>
                                {{-- <div class="flex text-secondary-content justify-start font-bold text-xs rounded">
                                    <p class="{{ $pessoa->batizado || 'text-error' }}">
                                        {{ $pessoa->batizado ? 'Batizado(a)' : 'Não Batizado(a)' }}</p>
                                </div>
                                <div class="flex text-secondary-content justify-start font-bold text-xs rounded">
                                    <p>
                                        {{ $pessoa->data_nascimento->age }} anos </p>
                                </div> --}}
                            </div>
                            <div class="flex items-center">
                                <label for="modal-question" 
                                    class="btn modal-button grid place-items-center p-2 text-xs font-semibold uppercase tracking-wider rounded-lg bg-error text-error-content border border-error-content hover:opacity-90 hover:bg-error">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button
                        class="flex justify-center items-center w-full bg-primary text-primary-content hover:bg-primary-focus p-2.5 rounded-b-lg">
                        <div class="flex items-center">
                            Abrir Ficha
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                            </svg>
                        </div>
                    </button>
                </section>
            @endforeach
        </div>
    @endif

@endsection
