@section('title', 'Login')

<form class="w-full max-w-sm text-base px-6" action="{{ route('login.handle') }}" method="POST">
    <p class="font-semibold text-sm text-base-content mt-3 mb-6">Informe suas credenciais para entrar</p>
    @csrf
    <div class="flex flex-col font-semibold space-y-4">
        <div class="flex flex-col space-y-2">
            <label class="text-left text-base-content" for="email">Email</label>
            <input class="input input-bordered input-primary" type="email" name="email" id="email" value="{{ old('email') }}" />

            <label class="text-left text-base-content" for="password">Senha</label>
            <input class="input input-bordered input-primary" type="password" name="password" id="password" />
        </div>

        @if ($errors->any())
            <div class="p-2.5 text-error-content bg-error rounded">
                @include('layout._partials.Validation')
            </div>
        @endif
        <button class="btn btn-primary" type="submit">Entrar</button>
        <div class="flex flex-col md:flex-row space-y-1 md:space-y-0 justify-between text-sm">
            <a class="link link-primary" href="!#">Esqueceu a senha?</a>
            <a class="link link-primary" href="{{ route('register') }}">Cadastre-se</a>
        </div>
    </div>
</form>