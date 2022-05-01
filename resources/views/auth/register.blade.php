@extends('auth._partials.form')

@section('title', 'Registre-se')
@section('formAction', route('register.handle'))

@section('formInputs')
    <div class="flex flex-col font-semibold space-y-4">
        <div class="flex flex-col space-y-2">
            <label class="text-left text-sky-800" for="name">Nome completo</label>
            <input class="outline-none p-1.5 rounded ring-2 ring-stone-500/40 focus:ring-sky-600/50 pl-2 text-sm" type="text" name="name" id="name"
                value="{{ old('name') }}" />

            <label class="text-left text-sky-800" for="email">Email</label>
            <input class="outline-none p-1.5 rounded ring-2 ring-stone-500/40 focus:ring-sky-600/50 pl-2 text-sm" type="email" name="email"
                id="email" value="{{ old('email') }}" />

            <label class="text-left text-sky-800" for="password">Senha</label>
            <input class="outline-none p-1.5 rounded ring-2 ring-stone-500/40 focus:ring-sky-600/50 pl-2" type="password" name="password"
                id="password" />

            <label class="text-left text-sky-800" for="password_confirmation">Confirme a senha</label>
            <input class="outline-none p-1.5 rounded ring-2 ring-stone-500/40 focus:ring-sky-600/50 pl-2" type="password"
                name="password_confirmation" id="password_confirmation" />
        </div>

        @if ($errors->any())
            <div class="p-2.5 text-red-600 bg-red-200 rounded">
                @include('includes.validation-forms')
            </div>
        @endif
        <button class="p-3 bg-cyan-700 rounded ring-2 ring-sky-400/30 hover:bg-cyan-600 text-white font-semibold"
            type="submit">Registrar</button>
        <div class="flex">
            <p class="text-stone-800 pr-1">Já tem cadastro?</p><a class="text-cyan-600 hover:text-cyan-400 transition" href="{{ route('login') }}">Entrar</a>
        </div>
    </div>
@endsection
