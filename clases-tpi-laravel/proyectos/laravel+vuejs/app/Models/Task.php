<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // $fillable -> define que campos pueden ser llenados 
    // masivamente, evita envio de datos inesperados al modelo
    protected $fillable = ['task', 'completed'];

    

}
