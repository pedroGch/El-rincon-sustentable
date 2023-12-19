<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Carrito
 *
 * @property int $carrito_id
 * @property int $usuario_id
 * @property int $producto_id
 * @property int $cantidad_prod
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Producto $productos
 * @method static \Illuminate\Database\Eloquent\Builder|Carrito newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrito newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrito query()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrito whereCantidadProd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrito whereCarritoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrito whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrito whereProductoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrito whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrito whereUsuarioId($value)
 * @mixin \Eloquent
 */
class Carrito extends Model
{
   // use HasFactory;

    protected $table = 'carritos';

    protected $primaryKey = 'carrito_id';

    protected $fillable = [
        'usuario_id',
        'producto_id',
        'cantidad_prod',
        'precio',
    ];

    public static $rules = [
        'cantidad_prod' => 'integer|min:1',
    ];

    public static $errorMessages = [
        'cantidad_prod.min' => 'Tenés que agregar al menos un producto',
    ];

    /**
   * Esta función devuelve el precio formateado
   * @return string
   */
  public function precio_formateado(): string
  {
    return "$" . number_format($this->precio, 0, ",", ".");
  }


  /* RELACIONES */

  /**
   * Creamos la relación entre la tabla carritos y la tabla productos
   * (Relación muchos a muchos)
   * Esta función devuelve un array de objetos de la clase Producto
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function productos()
  {
    return $this->belongsTo(Producto::class, 'producto_id', 'id');
  }

  /**
   * Creamos la relación entre la tabla carritos y la tabla usuarios
   * (Relación uno a uno)
   * Esta función devuelve el objeto de la clase Usuario al que pertenece el carrito
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user() :BelongsTo
  {
    return $this->belongsTo(User::class, 'usuario_id', 'id');
  }


}
