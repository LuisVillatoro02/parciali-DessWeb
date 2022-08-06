<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_cliente extends Model
{
    protected $table = 'tipo_cliente';
    protected $fillable = [
        'description',
        'created_at',
        'updated_at',
    ];
}
