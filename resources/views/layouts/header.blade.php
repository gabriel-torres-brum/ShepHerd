<header class="fixed min-w-full max-h-20 h-96 bg-gray-900 text-white z-10">
    <section class="flex justify-between h-full px-12">
        <div class="flex flex-col justify-center">
            <div class="flex items-center font-bold text-sky-700 leading-6">
                Shepherd <p class="p-1.5 ml-1 px-3 bg-sky-700 text-white ring-2 ring-sky-200/40 rounded-md shadow">
                    System</p>
            </div>
            <p class="text-white text-sm pt-2">{{ $userInfo->name }}</p>
        </div>
        <nav class="flex justify-around">
            <div class="h-full grid place-items-center relative">
                <div
                    class="@if ($routeName === 'home') block @else hidden @endif absolute bottom-0 opacity-20 bg-gradient-to-t from-gray-50 to-transparent h-full w-full">
                </div>
                <a href="#"
                    class="
                @if ($routeName === 'home') link-active @endif
                transition-all duration-200 text-gray-100 hover:text-white tracking-wide relative px-4">
                    Dashboard
                </a>
            </div>

            <div class="h-full grid place-items-center relative">
                <div
                    class="@if ($routeName === 'quotation') block @else hidden @endif absolute bottom-0 opacity-20 bg-gradient-to-t from-gray-50 to-transparent h-full w-full">
                </div>
                <a href="#"
                    class="
                @if ($routeName === 'quotation') link-active @endif
                transition-all duration-200 text-gray-100 hover:text-white tracking-wide relative px-4">
                    Administrativo
                </a>
            </div>

            <div class="h-full grid place-items-center relative">
                <div
                    class="@if ($routeName === 'quotation') block @else hidden @endif absolute bottom-0 opacity-20 bg-gradient-to-t from-gray-50 to-transparent h-full w-full">
                </div>
                <a href="#"
                    class="
                @if ($routeName === 'quotation') link-active @endif
                transition-all duration-200 text-gray-100 hover:text-white tracking-wide relative px-4">
                    Financeiro
                </a>
            </div>

            <div class="h-full grid place-items-center relative">
                <div
                    class="@if ($routeName === 'account') block @else hidden @endif absolute bottom-0 opacity-20 bg-gradient-to-t from-gray-50 to-transparent h-full w-full">
                </div>
                <a href="#"
                    class="
                @if ($routeName === 'account') link-active @endif
                transition-all duration-200 text-gray-100 hover:text-white tracking-wide relative px-4">
                    Minha conta
                </a>
            </div>

        </nav>
        <form action="{{ route('logout') }}" class="grid place-items-center" method="GET">
            @csrf
            <button type="submit">
                Logout
            </button>
        </form>
    </section>
</header>
