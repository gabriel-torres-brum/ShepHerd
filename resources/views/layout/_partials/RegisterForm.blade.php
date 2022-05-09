@section('title', 'Registre-se')

<form class="w-full max-w-sm text-base px-6" action="{{ route('register.handle') }}" method="POST">
    <p class="font-semibold text-sm text-base-content mt-3 mb-6">Informe suas credenciais para se registrar</p>
    @method('PUT')
    @csrf
    <div class="flex flex-col font-semibold space-y-4">
        <div class="flex flex-col space-y-2">
            <label class="text-left text-base-content" for="name">Nome completo</label>
            <input class="input input-bordered input-primary"
                type="text" name="name" id="name" value="{{ old('name') }}" />

            <label class="text-left text-base-content" for="email">Email</label>
            <input class="input input-bordered input-primary"
                type="email" name="email" id="email" value="{{ old('email') }}" />

            <label class="text-left text-base-content" for="password">Senha</label>
            <input class="input input-bordered input-primary" type="password"
                name="password" id="password" />

            <label class="text-left text-base-content" for="password_confirmation">Confirme a senha</label>
            <input class="input input-bordered input-primary"
                type="password" name="password_confirmation" id="password_confirmation" />
        </div>

        @if ($errors->any())
            <div class="p-2.5 text-error-content bg-error rounded">
                @include('layout._partials.Validation')
            </div>
        @endif
        <button class="btn btn-primary"
            type="submit">Registrar</button>
        <div class="flex text-sm">
            <p class="text-base-content pr-1">Já tem cadastro?</p><a class="link link-primary"
                href="{{ route('login') }}">Entrar</a>
        </div>
    </div>
</form>
