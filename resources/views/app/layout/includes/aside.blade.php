<aside class="drawer">
    <input id="drawer-input" type="checkbox" class="drawer-toggle" />
    <div class="z-30 drawer-content grid place-items-center overflow-y-hidden bg-base-200">
        <section class="p-6 h-full w-full md:max-w-5xl shadow bg-base-100 overflow-y-hidden">
        @yield('content')
        </section>
    </div>
    <div class="drawer-side">
        <label for="drawer-input" class="drawer-overlay"></label>
        <ul class="menu p-4 overflow-y-auto w-80 bg-base-200 text-base-content">
            <!-- Sidebar content here -->
            @include('app.layout._partials.aside-menu')
        </ul>
    </div>
</aside>