<div class="px-3 py-4">

    <div
        class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

        <h1 class="font-bold mb-2">Lista de Cursos en Papelera</h1>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            @if ($response = session()->get('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <span class="font-medium">Success alert!</span> {{ $response }}
                </div>
            @endif
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
                    @forelse ($papelera_cursos as $index=>$course)
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
                                <button wire:click="activateCourse('{{$course->id_Curso}}')"
                                    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Activar</button>
                                <button type="button"
                                    wire:click="confirmDelete('{{ $course->id_Curso }}','{{ $course->nombre_Curso }}')"
                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Borrar
                                </button>
                            </td>
                        </tr>
                    @empty
                    <td colspan="5" class="px-3 py-4"><span class="text-red-500">No cursos en Papelera</span></td>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</div>

@script
    <script>
        $wire.on('confirm-delete', function(mensaje) {
            Swal.fire({
                title: mensaje,
                text: "Al Aceptar se eliminara permanentemente",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, eliminar",
            }).then((result) => {
                if (result.isConfirmed) {
                    $wire.dispatch('ok-delete');
                }
            });
        });

        $wire.on('success-delete', function(mensaje) {
            Swal.fire({
                title: 'Mensaje del Sistema',
                text: mensaje,
                icon: "success",
            }).then(function(){
                @this.call('showCoursesPapelera');
            });
        });

        $wire.on('success-activate', function(mensaje) {
            Swal.fire({
                title: 'Mensaje del Sistema',
                text: mensaje,
                icon: "success",
            }).then(function(){
                @this.call('showCoursesPapelera');
            });
        });
    </script>
@endscript
