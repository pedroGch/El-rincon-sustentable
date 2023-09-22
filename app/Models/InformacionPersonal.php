<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $email
 * @property string $codigo_postal
 */
class InformacionPersonal extends Model
{
  protected $table = 'informacion_personal';
}
