<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Compra
 *
 * @property int $compra_id
 * @property int $usuario_id
 * @property string $fecha_compra
 * @property int $importe_compra
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Producto> $productos
 * @property-read int|null $productos_count
 * @property-read \App\Models\User $usuario
 * @method static \Illuminate\Database\Eloquent\Builder|Compra newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Compra newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Compra query()
 * @method static \Illuminate\Database\Eloquent\Builder|Compra whereCompraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compra whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compra whereFechaCompra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compra whereImporteCompra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compra whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compra whereUsuarioId($value)
 * @mixin \Eloquent
 */
class Compra extends Model
{
    //use HasFactory;
    protected $table = 'compras';

    protected $primaryKey = 'compra_id';



    /* RELACIONES */

    /**
     * Creamos la relación entre la tabla compras y la tabla usuarios
     * (Relación uno a muchos inversa)
     * Esta función devuelve el objeto de la clase Usuario al que pertenece la compra
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario() :BelongsTo
    {
      return $this->belongsTo(User::class, 'usuario_id', 'id');
    }


    /**
     * Creamos la relación entre la tabla compras y la tabla productos
     * (Relación muchos a muchos)
     * Esta función devuelve un array de objetos de la clase Producto
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function productos() :BelongsToMany
    {
      return $this->belongsToMany(
        Producto::class, //FQN del Modelo que representa la tabla pivot
        'productos_x_compra', // "table" nombre de la tabla pivot
        'compra_id', // "foreignPivotKey" (este Modelo en la pivot)
        'producto_id', // "relatedPivotKey" Modelo con el que se relaciona
        'compra_id', // "parentKey" este Modelo
        'id' // "relatedKey" Modelo con el que se relaciona
      );
      // return $this->hasMany(
      //   Producto::class, //FQN del Modelo que representa la tabla pivot
      //   'id', // "foreignPivotKey" (este Modelo en la pivot)
      //   'compra_id', // "parentKey" este Modelo
      // );
    }
}
