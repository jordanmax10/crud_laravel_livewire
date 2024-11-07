<nav class="bg-gray-800 dark:bg-gray-900 border-gray-200 dark:border-gray-700 shadow-md">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{route('courses')}}" wire:navigate.hover class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('img/nueva-pagina.png')}}" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold text-white whitespace-nowrap dark:text-white">
                CRUD Laravel Livewire
            </span>
        </a>

        <!-- Botón para el menú móvil -->
        <button data-collapse-toggle="navbar-multi-level" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-200 rounded-lg md:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <!-- Menú de navegación -->
        <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
            <ul
                class="dark:text-white flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                
                {{$slot}}

            </ul>
        </div>
    </div>
</nav>