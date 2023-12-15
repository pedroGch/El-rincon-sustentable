<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
   // use HasFactory;

    protected $table = null;

    protected $fillable = [
        'usuario_id',
        'producto_id',
        'cantidad_prod',
        'precio',
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
