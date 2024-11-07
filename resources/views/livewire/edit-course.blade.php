<div class="mt-5 px-6 py-10 bg-white dark:bg-gray-800 rounded-lg shadow-2xl w-full sm:w-11/12 lg:w-2/3 xl:w-1/2 mx-auto">
    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6 text-center">Edit Course</h2>

    <!-- Campos de entrada -->
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <!-- Nombre del Curso -->
        <div>
            <label for="nombre_Curso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course Name</label>
            <input type="text" id="nombre_Curso"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 transition duration-200 ease-in-out"
                placeholder="Name the Course..." required wire:model='courseEditar.nombre_Curso' />
            @error('courseEditar.nombre_Curso')
            <span class="text-red-500 m-2 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Descripción del Curso -->
        <div>
            <label for="descripcion_Curso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course Description</label>
            <input type="text" id="descripcion_Curso"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 transition duration-200 ease-in-out"
                placeholder="Enter a short description..." required wire:model="courseEditar.descripcion_Curso" />
            @error('courseEditar.descripcion_Curso')
            <span class="text-red-500 m-2 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Precio del Curso -->
    <div class="mb-6">
        <label for="precio_Curso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course Price</label>
        <input type="number" id="precio_Curso"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 transition duration-200 ease-in-out"
            placeholder="Price of the course..." required wire:model="courseEditar.precio_Curso" />
        @error('courseEditar.precio_Curso')
        <span class="text-red-500 m-2 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Botón de guardar -->
    <button type="submit" wire:click="updateDataCourse"
        class="w-full sm:w-auto bg-blue-700 text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-3 transition duration-200 ease-in-out dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Save Course
    </button>
</div>
