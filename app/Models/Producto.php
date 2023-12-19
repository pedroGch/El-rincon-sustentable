<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Producto
 *
 * @property integer $id
 * @property string $nombre_prod
 * @property string $imagen_prod
 * @property string $alt
 * @property int $categoria_id
 * @property string $descripcion
 * @property int $stock
 * @property int $precio
 * @property string $estado
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Categoria|null $categoria
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Compra> $compras
 * @property-read int|null $compras_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Etiqueta> $etiquetas
 * @property-read int|null $etiquetas_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Carrito> $carritos
 * @property-read int|null $carritos_count
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
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereCategoriaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereEstado($value)
 * @mixin \Eloquent
 */
class Producto extends Model
{
  //use HasFactory;

  protected $table = 'productos';
  protected $fillable = ['nombre_prod', 'imagen_prod', 'alt', 'categoria_id', 'descripcion', 'stock', 'precio'];

  public static $rules = [
    'nombre_prod' => 'required|max:255',
    'categoria_id' => 'required',
    'descripcion' => 'required',
    'stock' => 'required|numeric',
    'precio' => 'required|numeric',
  ];

  public static $ruleAlt = [
    'alt' => 'required|max:255',
  ];

  public static $errorMessages = [
    'nombre_prod.required' => 'El nombre del producto es requerido',
    'nombre_prod.max' => 'El nombre del producto no puede contener más de 255 carateres',
    'categoria_id.required' => 'La categoría es requerida',
    'descripcion.required' => 'La descripción es requerida',
    'stock.required' => 'El stock es requerido',
    'stock.numeric' => 'El stock debe ser un número',
    'precio.required' => 'El precio es requerido',
    'precio.numeric' => 'El precio debe ser un número',
    'alt.required' => 'El texto alternativo es requerido',
    'alt.max' => 'El texto alternativo no puede contener más de 255 carateres',
  ];




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
   * Esta función devuelve el precio formateado utilizando Accessors & Mutators
   * @return Attribute
   */
  public function precio(): Attribute
  {
    return Attribute::make(
      get: fn ($value) => $value / 100,
      set: fn ($value) => $value * 100
    );
  }

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
   * Creamos la relación entre la tabla productos y la tabla categorias
   * (Relación uno a muchos inversa)
   * Esta función devuelve el objeto de la clase Categoria al que pertenece el producto
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function categoria() :BelongsTo
  {
    return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
  }

  /**
   * Creamos la relación entre la tabla productos y la tabla etiquetas
   * (Relación muchos a muchos)
   * Esta función devuelve un array de objetos de la clase Etiqueta
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function etiquetas() :BelongsToMany
  {
    return $this->belongsToMany(
      Etiqueta::class, //FQN del Modelo que representa la tabla pivot
      'productos_x_etiquetas', // "table" nombre de la tabla pivot
      'producto_id', // "foreignPivotKey" (este Modelo en la pivot)
      'etiqueta_id', // "relatedPivotKey" Modelo con el que se relaciona
      'id', // "parentKey" este Modelo
      'etiqueta_id' // "relatedKey" Modelo con el que se relaciona
    );
  }


  /**
   * Creamos la relación entre la tabla productos y la tabla compras
   * (Relación muchos a muchos)
   * Esta función devuelve un array de objetos de la clase Compra
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function compras() :BelongsToMany
  {
    return $this->belongsToMany(
      Compra::class, //FQN del Modelo que representa la tabla pivot
      'productos_x_compra', // "table" nombre de la tabla pivot
      'producto_id', // "foreignPivotKey" (este Modelo en la pivot)
      'compra_id', // "relatedPivotKey" Modelo con el que se relaciona
      'id', // "parentKey" este Modelo
      'compra_id' // "relatedKey" Modelo con el que se relaciona
    );
  }

  /**
   * Creamos la relación entre la tabla productos y la tabla carritos
   * (Relación muchos a muchos)
   * Esta función devuelve un array de objetos de la clase Carrito
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function carritos() :BelongsToMany
  {
    return $this->belongsToMany(
      Carrito::class, //FQN del Modelo que representa la tabla pivot
      'productos_x_carrito', // "table" nombre de la tabla pivot
      'producto_id', // "foreignPivotKey" (este Modelo en la pivot)
      'carrito_id', // "relatedPivotKey" Modelo con el que se relaciona
      'id', // "parentKey" este Modelo
      'carrito_id' // "relatedKey" Modelo con el que se relaciona
    );
  }
}
