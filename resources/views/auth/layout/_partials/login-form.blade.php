@section('title', 'Login')

<form class="w-full max-w-sm text-base px-6" action="{{ route('login.handle') }}" method="POST">
    <p class="font-semibold text-sm text-slate-600 mt-3 mb-6">Informe suas credenciais para entrar</p>
    @csrf
    <div class="flex flex-col font-semibold space-y-4">
        <div class="flex flex-col space-y-2">
            <label class="text-left text-sky-800" for="email">Email</label>
            <input class="outline-none p-1.5 rounded ring-2 ring-stone-500/40 pl-2 text-sm md:text-base focus:ring-sky-600/50"
                type="email" name="email" id="email" value="{{ old('email') }}" />

            <label class="text-left text-sky-800" for="password">Senha</label>
            <input class="outline-none p-1.5 rounded ring-2 ring-stone-500/40  pl-2 text-sm md:text-base focus:ring-sky-600/50"
                type="password" name="password" id="password" />
        </div>

        @if ($errors->any())
            <div class="p-2.5 text-red-600 bg-red-200 rounded">
                @include('layout.includes.validation-forms')
            </div>
        @endif
        <button
            class="p-3 bg-cyan-700 rounded ring-2 ring-sky-400/30 hover:bg-cyan-600 text-white font-semibold transition"
            type="submit">Entrar</button>
        <div class="flex flex-col md:flex-row space-y-1 md:space-y-0 justify-between text-sm">
            <a class="text-cyan-600 hover:text-cyan-400 transition" href="!#">Esqueceu a senha?</a>
            <a class="text-cyan-600 hover:text-cyan-400 transition" href="{{ route('register') }}">Cadastre-se</a>
        </div>
    </div>
</form>