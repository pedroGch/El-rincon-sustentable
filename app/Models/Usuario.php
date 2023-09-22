<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre_usuario
 * @property string $rol
 * @property string $password
 */
class Usuario extends Model
{
  //use HasFactory;
  protected  $table = 'usuarios';
  protected  $pk = 'id';

}
