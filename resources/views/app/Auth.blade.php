@extends('layout.Master')

@section('content')
    <main class="min-h-screen grid place-items-center bg-base-300 px-6">
        <section class="container max-w-xl">
            <div class="grid place-items-center w-full text-center bg-base-100 py-12 rounded shadow-lg ring-1 ring-base-300">
                <div class="flex items-center font-bold text-primary leading-6 text-2xl">
                    Sheep <span class="text-base-content">Herd</span>
                    <img class="ml-1 w-7 h-7" src="{{ asset('sheep-svgrepo-com.svg') }}">
                </div>
                @switch(request()->route()->getName())
                    @case('login')
                        @include('layout._partials.LoginForm')
                    @break
    
                    @case('register')
                        @include('layout._partials.RegisterForm')
                    @break
                @endswitch
            </div>
        </section>
    </main>
@endsection
