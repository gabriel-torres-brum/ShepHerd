<aside class="drawer">
    <input id="drawer-input" type="checkbox" class="drawer-toggle" />
    <div class="z-30 drawer-content grid place-items-center overflow-y">
        @yield('content')
    </div>
    <div class="drawer-side hidden">
        <label for="drawer-input" class="drawer-overlay"></label>
        <ul class="menu p-4 overflow-y-auto w-80 bg-base-100 text-base-content">
            <!-- Sidebar content here -->
            @include('app.layout._partials.aside-menu')
        </ul>
    </div>
</aside>