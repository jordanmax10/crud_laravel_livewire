<div class="px-3 py-4">

    <div
        class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

        <h1 class="font-bold mb-2">Lista de Cursos</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <button wire:navigate.hover href="{{ route('courses.create') }}" type="button"
                class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add
                New Course</button>
            @if ($response = session()->get('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <span class="font-medium">Success alert!</span> {{ $response }}
                </div>
            @endif
            <input type="text" wire:model="search" wire:keydown="showCourses()" class="px-2 py-3 border-spacing-2 border-blue-500 rounded-md mb-2 w-full "
            placeholder="Search Course...">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-gray-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Course Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $index=>$course)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $index + 1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $course->nombre_Curso }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $course->descripcion_Curso }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $course->precio_Curso }}
                            </td>
                            <td class="px-6 py-4">
                                <button wire:navigate href="{{ route('courses.edit', $course) }}"
                                    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Editar</button>
                                <button type="button"
                                    wire:click="confirmarEliminado('{{ $course->id_Curso }}','{{ $course->nombre_Curso }}')"
                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Eliminar</button>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</div>

@script
    <script>
        $wire.on('confirmareliminado', function(mensaje, nombre_Curso) {
            Swal.fire({
                title: mensaje,
                text: "Al eliminar el curso seleccionado, se quitara de la lista y sera enviado a la papelera.",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, eliminar",
            }).then((result) => {
                if (result.isConfirmed) {
                    $wire.dispatch('eliminar');
                }
            });
        });

        $wire.on('borrado', function(mensaje) {
            Swal.fire({
                title: 'Mensaje del sistema',
                text: mensaje,
                icon: "success",
            });
        });
    </script>
@endscript
