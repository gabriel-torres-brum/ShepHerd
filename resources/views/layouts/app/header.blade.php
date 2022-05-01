<header class="fixed min-w-full max-h-20 h-96 bg-gray-900 text-white z-10">
    <section class="flex justify-between h-full px-12">
        <div class="grid place-items-center">
            <img src="" alt="{{ $userInfo->name }}" />
        </div>
        <nav class="flex justify-around">
            <div class="h-full grid place-items-center relative">
                <div
                    class="@if ($routeName === 'app.home') block @else hidden @endif absolute bottom-0 opacity-20 bg-gradient-to-t from-gray-50 to-transparent h-full w-full">
                </div>
                <a href="#"
                    class="
                @if ($routeName === 'app.home') link-active @endif
                transition-all duration-200 text-gray-100 hover:text-white tracking-wide relative px-4">
                    Dashboard
                </a>
            </div>

            <div class="h-full grid place-items-center relative">
                <div
                    class="@if ($routeName === 'app.quotation') block @else hidden @endif absolute bottom-0 opacity-20 bg-gradient-to-t from-gray-50 to-transparent h-full w-full">
                </div>
                <a href="#"
                    class="
                @if ($routeName === 'app.quotation') link-active @endif
                transition-all duration-200 text-gray-100 hover:text-white tracking-wide relative px-4">
                    Cotação
                </a>
            </div>

            <div class="h-full grid place-items-center relative">
                <div
                    class="@if ($routeName === 'app.account') block @else hidden @endif absolute bottom-0 opacity-20 bg-gradient-to-t from-gray-50 to-transparent h-full w-full">
                </div>
                <a href="#"
                    class="
                @if ($routeName === 'app.account') link-active @endif
                transition-all duration-200 text-gray-100 hover:text-white tracking-wide relative px-4">
                    Minha conta
                </a>
            </div>

        </nav>
        <form action="{{ route('logout') }}" class="grid place-items-center" method="POST">
            @csrf
            <button type="submit">
                Logout
            </button>
        </form>
    </section>
</header>