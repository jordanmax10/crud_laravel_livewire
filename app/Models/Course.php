<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id_Curso';
    
    protected $fillable = ['nombre_Curso', 'descripcion_Curso', 'precio_Curso'];
}
