<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $titulo
 * @property string $imagen
 * @property string $alt
 * @property string $contenido
 * @property int $creador // FK de usuarios
 *
 */
class Blog extends Model
{
  //use HasFactory;

  protected $table = 'noticias';
}
