<div class="drawer-side">
    <label for="sidebar" class="drawer-overlay"></label>
    <div class="p-4 w-80 bg-base-100 space-y-4">
        <div class="flex flex-col space-y-2">
            <button id="theme-toggle" data-toggle-theme="light,dark" class="btn btn-ghost btn-primary btn-block">
                <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="text-center p-2 text-lg text-semibold text-base-content/70 bg-clip-text bg-gradient-to-r from-primary to-accent">
                {{ auth()->user()->name }}
            </div>
        </div>
        <div class="divider">Páginas</div>
        <section class="flex flex-col overflow-y-auto bg-base-100 space-y-3 pt-2">
            <!-- Sidebar content here -->
            <div tabindex="0" class="collapse collapse-arrow bg-primary text-primary-content">
                <input id="collapse-input" class="collapse-open" type="checkbox">
                <label for="collapse-input"
                    class="collapse-title text-xl font-semibold flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                    <span class="w-full">Pessoas</span>
                </label>
                <div class="collapse-content">
                    <ul class="font-medium menu menu-compact">
                        <li><a href="{{ route('administrativo.pessoas.create') }}">Incluir</a>
                        </li>
                        <li><a href="{{ route('administrativo.pessoas.list') }}">Listar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="divider"></div>
        <div>
            <a href="{{ route('logout') }}" class="btn btn-square btn-ghost">
                <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                  </svg></span>
            </a>
        </div>
    </div>
</div>