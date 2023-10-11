<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Producto
 *
 * @property integer $id
 * @property string $nombre_prod
 * @property string $imagen_prod
 * @property string $alt
 * @property int $categoria
 * @property string $descripcion
 * @property int $stock
 * @property int $precio
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Producto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto query()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereImagenProd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereNombreProd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Producto extends Model
{
  //use HasFactory;

  protected $table = 'productos';

  /**
     * Esta función devuelve las primeras x palabras de un párrafo
     * @param int $cantidad Esta es la cantidad de palabras a extraer (Opcional)
     */
    public function descripcion_reducida(int $cantidad = 30): string
    {
        $texto = $this->descripcion;

        $array = explode(" ", $texto);
        if (count($array) <= $cantidad) {
            $resultado = $texto;
        } else {
            array_splice($array, $cantidad);
            $resultado = implode(" ", $array) . "...";
        }

        return $resultado;
    }

    /**
     * Esta función devuelve el precio formateado
     * @return string
     */
    public function precio_formateado(): string
    {
        return "$" . number_format($this->precio, 0, ",", ".");
    }
}
