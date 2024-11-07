<?php

namespace App\Livewire;

use App\Livewire\Forms\editCourse as FormsEditCourse;
use App\Models\Course;
use Livewire\Component;

class EditCourse extends Component
{

    public $course;
    public FormsEditCourse $courseEditar;

    public function mount(Course $course) {
        $this->course = $course; // Se asigna el curso que se recibe como parámetro
        $this->courseEditar->idCourse = $course->id_Curso;
        $this->courseEditar->nombre_Curso= $this->course->nombre_Curso;
        $this->courseEditar->descripcion_Curso= $this->course->descripcion_Curso;
        $this->courseEditar->precio_Curso= $this->course->precio_Curso;
    }

    //Metodo para guardar los cambios
    public function updateDataCourse(){
        $this->validate();

        $this->courseEditar->updateCourse();

        $this->reset();

        session()->flash('success', 'Curso actualizado correctamente');

        return redirect()->route('courses');
    }



    public function render()
    {
        return view('livewire.edit-course');
    }
}
