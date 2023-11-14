<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Compra extends Model
{
    //use HasFactory;
    protected $table = 'compras';

    protected $primaryKey = 'compra_id';



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
