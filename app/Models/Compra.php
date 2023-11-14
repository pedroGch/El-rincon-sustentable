<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos() :HasMany
    {
      return $this->hasMany(
        Producto::class, //FQN del Modelo que representa la tabla pivot
        'id', // "foreignPivotKey" (este Modelo en la pivot)
        'compra_id', // "parentKey" este Modelo
      );
    }
}
