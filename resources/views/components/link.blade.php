@props(['redirect' => '#'])

<li>
    <a href="{{ $redirect }}"
        class="text-white block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-teal-600 md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-teal-400 md:dark:hover:text-teal-400 md:dark:hover:bg-transparent">
        {{ $slot }}
    </a>
</li>
