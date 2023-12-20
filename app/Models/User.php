<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string $rol
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Compra> $compras
 * @property-read int|null $compras_count
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSurname($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'surname',
    'email',
    'password',
    'rol',
  ];


  public static $rules = [
    'name' => 'required|max:255',
    'surname' => 'required|max:255',
    'email' => 'required|email|max:255',
    'password' => 'required|max:255',
  ];

  public static $updateRules = [
    'name' => 'required|max:255',
    'surname' => 'required|max:255',
    'email' => 'required|email|max:255',
  ];

  public static $errorMessages = [
    'name.required' => 'El nombre es requerido',
    'name.max' => 'El nombre no puede contener más de 255 carateres',
    'surname.required' => 'El apellido es requerido',
    'surname.max' => 'El apellido no puede contener más de 255 carateres',
    'email.required' => 'El email es requerido',
    'email.email' => 'El email debe ser válido',
    'email.max' => 'El email no puede contener más de 255 carateres',
    'password.required' => 'La contraseña es requerida',
    'password.max' => 'La contraseña no puede contener más de 255 carateres',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
    'password' => 'hashed',
  ];

  /* RELACIONES */

  /**
   * Creamos la relacion entre la tabla usuarios y la tabla compras
   * (Relación uno a muchos)
   * Esta función devuelve un array de objetos de la clase Compra
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function compras(): HasMany
  {
    return $this->hasMany(
      Compra::class, //FQN del Modelo que representa la tabla pivot
      'usuario_id', // "foreignPivotKey" (este Modelo en la pivot)
      'id', // "parentKey" este Modelo
    );
  }


  /**
   * Creamos la relación entre la tabla usuarios y la tabla carritos
   * (Relación uno a uno)
   * Esta función devuelve el objeto de la clase Carrito al que pertenece el usuario
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function carrito(): HasOne
  {
    return $this->hasOne(Carrito::class, 'usuario_id', 'id');
  }

}
