<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class usuarios extends Model
{
    use HasFactory;
  protected $primaryKey='id';
  protected $fillable=['numusuario','nombre','apellidop','apellidom','sexo','edad','telefono','img','correo','tipou'];
}
