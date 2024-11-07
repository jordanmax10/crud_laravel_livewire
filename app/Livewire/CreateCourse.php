<?php

namespace App\Livewire;

use App\Livewire\Forms\saveCourse;
use Livewire\Component;

class CreateCourse extends Component
{
    public saveCourse $course;

    public function render()
    {
        return view('livewire.create-course');
    }

    // Metodo para registrar un nuevo curso

    public function save(){ {
        $this->course->store();

        // $this->dispatch('saveCourse'); // Emitir un evento para que el componente padre sepa que se ha guardado un nuevo curso

        session()->flash('success', "Curso Registrado");

        return redirect()->route('courses');
    }
}
}
