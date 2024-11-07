<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD LARAVEL LIVEWIRE</title>
    <link rel="shortcut icon" href="{{asset('img/nueva-pagina.png')}}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-nav>
        <x-link redirect="{{ route('courses') }}" wire:navigate.hover>Cursos</x-link>
        <x-link redirect="{{ route('courses.papelera') }}" wire:navigate.hover>Papelera Cursos</x-link>
    </x-nav>
    <main class="min-h-screen flex flex-col">
        {{ $slot }}
    </main>
    <x-footer></x-footer>
</body>

</html>
