@extends('layout.master')
@section('content')
    <main class="min-h-screen grid place-items-center bg-gradient-to-tr from-sky-500 to-cyan-600 px-6">
        <section class="grid place-items-center w-full max-w-xl min-h-[30rem] bg-gray-100 rounded shadow-xl">
            <div class="grid place-items-center w-full text-center text-3xl py-12 px-6">
                <div class="flex items-center font-bold text-sky-700 leading-6">
                    Sheep <span class="text-slate-700">Herd</span>
                    <img class="ml-px w-7 h-7" src="{{ asset('sheep-svgrepo-com.svg') }}">
                </div>
                @switch(request()->route()->getName())
                    @case('login')
                        @include('auth.layout._partials.login-form')
                    @break
    
                    @case('register')
                        @include('auth.layout._partials.register-form')
                    @break
                @endswitch
            </div>
        </section>
    </main>
@endsection
