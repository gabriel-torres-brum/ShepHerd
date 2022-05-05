<section class="flex flex-col space-y-3">
    <div class="collapse collapse-arrow border border-base-100 bg-primary text-primary-content transition rounded-box">
        <input id="collapse-input" class="collapse-open" type="checkbox" />
        <label for="collapse-input" class="collapse-title text-xl font-semibold flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="text-center w-full">Administrativo</span>
        </label>
        <div class="collapse-content">
            <ul class="font-medium">
                <li><a href="{{ route('app.administrativo.pessoas.list') }}"
                        class="hover:bg-primary-focus">Pessoas</a>
                </li>
                <li><a
                        class="hover:bg-primary-focus">Programação</a>
                </li>
            </ul>
        </div>
    </div>

    <div tabindex="0" class="collapse collapse-arrow border border-base-100 bg-primary text-primary-content transition rounded-box">
        <input id="collapse-input" class="collapse-open" type="checkbox" />
        <label for="collapse-input" class="collapse-title text-xl font-semibold flex items-center justify-between">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="text-center w-full">Financeiro</span>
        </label>
        <div class="collapse-content">
            <ul class="font-medium">
                <li><a class="hover:bg-primary-focus">Caixa</a>
                </li>
                <li><a
                        class="hover:bg-primary-focus">Lançamentos</a>
                </li>
                <li><a
                        class="hover:bg-primary-focus">Relatórios</a>
                </li>
            </ul>
        </div>
    </div>


</section>
