<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    use HasFactory;

    protected $table = 'colegios';
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
    ];
}
