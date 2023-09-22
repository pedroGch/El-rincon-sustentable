<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre_prod
 * @property string $imagen_prod
 * @property string $alt
 * @property int $categoria
 * @property string $descripcion
 * @property int $stock
 * @property int $precio
 *
 */
class Producto extends Model
{
  //use HasFactory;

  protected $table = 'productos';
}
