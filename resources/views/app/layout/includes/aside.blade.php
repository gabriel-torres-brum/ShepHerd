<aside class="drawer drawer-mobile h-full">
    <input id="drawer-input" type="checkbox" class="drawer-toggle" />
    <div class="z-30 drawer-content grid place-items-center overflow-y-hidden bg-base-300">
        <section class="p-6 h-full w-full md:max-w-5xl shadow bg-base-100 overflow-y-hidden">
            @yield('content')
        </section>
    </div>
    <div class="drawer-side">
        <label for="drawer-input" class="drawer-overlay"></label>
        <ul class="flex flex-col flex-1 menu p-4 overflow-y-auto w-80 bg-base-200 text-base-content">
            <!-- Sidebar content here -->
            @include('app.layout._partials.aside-menu')
            <div class="form-control mt-auto">
                <label class="input-group input-group-vertical">
                    <span class="bg-primary text-primary-content ">Temas</span>
                    <select class="select select-primary w-full" data-choose-theme>
                        <option value="">System</option>
                        <option value="light">Light</option>
                        <option value="dark">Dark</option>
                        <option value="corporate">Corporate</option>
                        <option value="business">Business</option>
                        <option value="emerald">Emerald</option>
                        <option value="dracula">Dracula</option>
                    </select>
                </label>
            </div>
        </ul>
    </div>
</aside>
