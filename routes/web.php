<?php

use App\Livewire\Courses;
use App\Livewire\CreateCourse;
use App\Livewire\EditCourse;
use App\Livewire\PapeleraCursos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('courses',Courses::class)->name('courses');
Route::get('courses/create', CreateCourse::class)->name('courses.create');
Route::get('courses/{course}/edit', EditCourse::class)->name('courses.edit');

Route::get('courses/papelera', PapeleraCursos::class)->name('courses.papelera');