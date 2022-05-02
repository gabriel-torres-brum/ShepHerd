@extends('layouts.master')
@section('content')
    <main class="min-h-screen grid place-items-center bg-gradient-to-tr from-sky-500 to-cyan-600">
        <section class="grid place-items-center w-full max-w-xl min-h-[30rem] bg-gray-100 rounded shadow-xl">
            <form class="w-full max-w-sm space-y-6 py-12 px-6" action="@yield('formAction')" method="POST">
                <div class="grid place-items-center w-full text-center text-3xl">
                    <div class="flex items-center font-bold text-sky-700 leading-6">
                        Sheep <span class="text-slate-700">Herd</span>
                        <img class="ml-px w-7 h-7" src="{{ asset('sheep-svgrepo-com.svg') }}">
                    </div>
                </div>
                @csrf
                @yield('formInputs')
            </form>
        </section>
    </main>
@endsection
