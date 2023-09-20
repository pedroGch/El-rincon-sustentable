<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre_cat
 * @property string $descripcion
 */
class Categoria extends Model
{
   //use HasFactory;
   protected $table = 'categorias';
}
