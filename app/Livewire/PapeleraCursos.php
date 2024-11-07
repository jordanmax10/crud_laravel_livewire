<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Attributes\On;
use Livewire\Component;

class PapeleraCursos extends Component
{

    public $papelera_cursos;
    public $course_id;    

    public function render()
    {
        return view('livewire.papelera-cursos');
    }

    public function mount()
    {
        $this->showCoursesPapelera();
    }

    // El método 'mount' se ejecuta cuando el componente se inicializa. Funciona como un constructor.
    public function showCoursesPapelera()
    {
        // Recupera todos los registros de cursos eliminados temporalmente, los que tengan el 
        // deleted_at diferente de NULL, y los asigna a la propiedad '$papelera_cursos'.
        $this->papelera_cursos = Course::onlyTrashed()->get(); 
    }

    // Metodo para confirmar antes de borrar curos de la papelera
    public function confirmDelete($course_id, $course_name)
    {
        $this->course_id = $course_id;

        $this->dispatch('confirm-delete','¿Estás seguro de querer eliminar el curso ' . $course_name . ' de la papelera?');
    }

    // Metodo para borrar curso de la papelera
    #[On("ok-delete")]
    public function deleteCourse(){
        //onlyTrashed() recupera los registros eliminados temporalmente
        $course = Course::onlyTrashed()->find($this->course_id); 

        // Forzar la eliminación del registro
        $course->forceDelete();

        // Resetear la propiedad '$course_id' para que no se muestre el modal de confirmación
        $this->reset("course_id");


        $this->dispatch('success-delete','Curso eliminado de la papelera correctamente');

        // // Mostrar los cursos de la papelera
        // $this->showCoursesPapelera();
    }

    // Metodo para activar el curso de la papelera
    public function activateCourse($course_id) {
        // Consultar al curso con el id
        $course = Course::onlyTrashed()->find($course_id);

        // Activar el curso
        $course->restore();

        // Mostrar mensaje de éxito con evento 'success-activate'
        $this->dispatch('success-activate','Curso activado correctamente');

        // Mostrar los cursos de la papelera
        $this->showCoursesPapelera();
    }
}
