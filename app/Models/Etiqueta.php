<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Etiqueta
 *
 * @property int $etiqueta_id
 * @property string $nombre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Etiqueta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Etiqueta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Etiqueta query()
 * @method static \Illuminate\Database\Eloquent\Builder|Etiqueta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etiqueta whereEtiquetaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etiqueta whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etiqueta whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Etiqueta extends Model
{
    // use HasFactory;
    protected $primaryKey = 'etiqueta_id';
}
