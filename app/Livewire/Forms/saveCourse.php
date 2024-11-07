<?php

namespace App\Livewire\Forms;

use App\Models\Course;
use Livewire\Attributes\Validate;
use Livewire\Form;

class saveCourse extends Form
{
    #[Validate('required', message:"Ingrese el nombre del Curso")] // Validar que el campo sea requerido
    public $nombre_Curso;
    #[Validate('required', message:"Ingrese la descripción del Curso")] // Validar que el campo sea requerido
    public $descripcion_Curso;
    #[Validate('required', message:"Ingrese el precio del Curso")] // Validar que el campo sea requerido
    public $precio_Curso;

    // Registrar un nuevo curso

    public function store(){
        $this->validate();

        Course::create([
            'nombre_Curso' => $this->nombre_Curso,
            'descripcion_Curso' => $this->descripcion_Curso,
            'precio_Curso' => $this->precio_Curso
        ]);

    }
}
