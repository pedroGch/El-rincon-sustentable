<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\InformacionPersonal
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $email
 * @property string $codigo_postal
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|InformacionPersonal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InformacionPersonal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InformacionPersonal query()
 * @method static \Illuminate\Database\Eloquent\Builder|InformacionPersonal whereApellido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InformacionPersonal whereCodigoPostal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InformacionPersonal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InformacionPersonal whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InformacionPersonal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InformacionPersonal whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InformacionPersonal whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class InformacionPersonal extends Model
{
  protected $table = 'informacion_personal';
}
