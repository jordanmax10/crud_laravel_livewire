<?php

namespace App\Livewire\Forms;

use App\Models\Course;
use Livewire\Attributes\Validate;
use Livewire\Form;

class editCourse extends Form
{
    public $idCourse;
    #[Validate('required', message:"Ingrese el nombre del Curso")] // Validar que el campo sea requerido
    public $nombre_Curso;
    #[Validate('required', message:"Ingrese la descripción del Curso")] // Validar que el campo sea requerido
    public $descripcion_Curso;
    #[Validate('required', message:"Ingrese el precio del Curso")] // Validar que el campo sea requerido
    public $precio_Curso;

    public function updateCourse(){
        $course = Course::find($this->idCourse);

        $this->validate();

        $course->update([
            'nombre_Curso' => $this->nombre_Curso,
            'descripcion_Curso' => $this->descripcion_Curso,
            'precio_Curso' => $this->precio_Curso
        ]);
    }
}
