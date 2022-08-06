<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'cliente';
    protected $fillable = [
        'name',
        'apellido',
        'correo',
        'dpi',
        'created_at',
        'updated_at',
        'id_cliente',
    ];
}
