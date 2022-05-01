@extends('layouts.master')
@section('content')
    <main class="min-h-screen grid place-items-center bg-gradient-to-tr from-sky-500 to-cyan-600">
        <section class="grid place-items-center w-full max-w-xl min-h-[30rem] bg-gray-100 rounded shadow-xl">
            <form class="w-full max-w-sm space-y-6 py-12" action="@yield('formAction')" method="POST">
                <div class="grid place-items-center w-full text-center text-2xl">
                    <div class="flex items-center font-bold text-sky-700 leading-6">
                        Shepherd <p class="p-1.5 ml-1 px-3 bg-sky-700 text-white ring-2 ring-sky-200/40 rounded-md shadow">
                            System</p>
                    </div>
                </div>
                @csrf
                @yield('formInputs')
            </form>
        </section>
    </main>
@endsection
