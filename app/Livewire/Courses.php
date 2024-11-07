<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Attributes\On;
use Livewire\Component;

class Courses extends Component
{
    public $courses;
    public $course_id;
    public $search;

    public function render()
    {
        return view('livewire.courses');
    }

    // El método mount se ejecuta cuando se inicializa el componente
    // sirve como constructor

    // El método 'mount' se ejecuta cuando el componente se inicializa. Funciona como un constructor.
    // Aquí se está utilizando el atributo #[On('borrado')] para escuchar el evento de eliminación y ejecutar este método.
    #[On('borrado')] 
    public function mount() 
    {
        $this->showCourses(); // Llama al método 'showCourses' para cargar los cursos cuando el componente se inicializa.
    }

    // Método para obtener y mostrar todos los cursos desde la base de datos.
    public function showCourses()
    {
        // Recupera todos los registros de cursos desde la base de datos y los asigna a la propiedad '$courses'.
        $this->courses = Course::where('nombre_Curso','like','%'.$this->search.'%')
        ->orwhere('descripcion_Curso','like','%'.$this->search.'%')
        ->get(); 
    }

    // Método para confirmar la eliminación de un curso. Recibe el ID del curso y el nombre del curso como parámetros.
    public function confirmarEliminado($id, $cursoName)
    {
        $this->course_id = $id; // Asigna el ID del curso que se va a eliminar a la propiedad '$course_id'.
        
        // Dispara el evento 'confirmareliminado' y pasa un mensaje de confirmación para la eliminación.
        // Este mensaje se mostrará al usuario.
        $this->dispatch('confirmareliminado', 'Estas seguro de eliminar el curso : ' . $cursoName . ' ?'); 
    }

    // Método para realizar la eliminación del curso. Este método se ejecuta cuando se dispara el evento 'eliminar'.
    #[On("eliminar")] // El método se ejecutará cuando se escuche el evento 'eliminar'.
    public function borrarCurso()
    {
        // Busca el curso en la base de datos usando el ID almacenado en '$course_id'.
        $curso = Course::find($this->course_id);

        // Elimina el curso encontrado de la base de datos.
        $curso->delete();

        // Resetea la propiedad '$course_id' para limpiar cualquier valor que haya quedado después de la eliminación.
        $this->reset('course_id');

        // Dispara el evento 'borrado' después de la eliminación y pasa un mensaje que indica que el curso ha sido eliminado correctamente.
        $this->dispatch('borrado', 'Curso eliminado correctamente');
    }
}
