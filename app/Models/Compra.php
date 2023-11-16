<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
