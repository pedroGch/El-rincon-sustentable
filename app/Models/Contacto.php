<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Contacto
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Contacto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contacto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contacto query()
 * @mixin \Eloquent
 */
class Contacto extends Model
{
  //use HasFactory;

  protected $table = 'contacto';
  protected $fillable = ['nombre', 'email', 'asunto', 'mensaje'];

  public static $rules = [
    'nombre' => 'required|max:255',
    'email' => 'required|max:255',
    'asunto' => 'required|max:255',
    'mensaje' => 'required|max:255',
  ];

  public static $errorMessages = [
    'nombre.required' => 'El nombre es requerido',
    'nombre.max' => 'El nombre no puede contener más de 255 carateres',
    'email.required' => 'El email es requerido',
    'email.max' => 'El email no puede contener más de 255 carateres',
    'asunto.required' => 'El asunto es requerido',
    'asunto.max' => 'El asunto no puede contener más de 255 carateres',
    'mensaje.required' => 'El mensaje es requerido',
    'mensaje.max' => 'El mensaje no puede contener más de 255 carateres',
  ];
}
