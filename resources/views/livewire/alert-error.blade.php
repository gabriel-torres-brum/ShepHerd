<div x-cloak x-show="alert" x-transition.duration.500ms class="fixed inset-x-0 top-0 bg-error">
    <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between flex-wrap">
            <div class="w-0 flex-1 flex items-center">
                <span class="flex p-2 rounded-lg bg-error-content/40">
                    <!-- Heroicon name: outline/speakerphone -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </span>
                <p class="ml-3 font-medium text-white truncate">
                    {{-- <span class="md:hidden"> We announced a new product! </span> --}}
                    <span class="inline"> {{ $errors->first() }} </span>
                </p>
            </div>
            {{-- <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                <a href="#"
                    class="btn b">
                    Learn more </a>
            </div> --}}
            <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                <button type="button"
                    class="-mr-1 sm:-mr-2 btn btn-ghost btn-circle">
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>