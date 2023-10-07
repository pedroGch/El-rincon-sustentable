<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Noticia
 *
 * @property integer $id
 * @property string $titulo
 * @property string $imagen
 * @property string $alt
 * @property string $contenido
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia query()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereContenido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereCreador($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereImagen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Noticia extends Model
{
  //use HasFactory;

  protected $table = 'noticias';
  protected $fillable = ['titulo','imagen','alt','contenido'];

  public static $rules = [
    'titulo' => 'required|max:255',
    'contenido' => 'required'
  ];

  public static $errorMessages = [
    'titulo.required'=> 'El título es requerido',
    'titulo.max'=> 'El título no puede contener más de 255 carateres',
    'contenido.required'=> 'La publicación debe tener un contenido',
  ];


   /**
     * Esta función devuelve las primeras x palabras de un párrafo
     * @param int $cantidad Esta es la cantidad de palabras a extraer (Opcional)
     */
    public function descripcion_reducida(int $cantidad = 50): string
    {
        $texto = $this->contenido;

        $array = explode(" ", $texto);
        if (count($array) <= $cantidad) {
            $resultado = $texto;
        } else {
            array_splice($array, $cantidad);
            $resultado = implode(" ", $array) . "...";
        }

        return $resultado;
    }

}
