<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //* Nombre de la tabla
    protected $table = 'student';

    //* tablos que podran ser alterados a la base
    protected $fillable = [
        'name',
        'email',
        'phone',
        'language'
    ];
}
