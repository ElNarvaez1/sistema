<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\MyResetPassword;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    use HasRoles;
    use SoftDeletes; //Implementamos
    protected $table = 'users';
    protected $primarykey ='id';
    public $incrementing= false;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'apellidoPaterno',
        'apellidoMaterno',
        'email',
        'username',
        'password',
        'telefono',
        'idRol',
    ];

    //protected $guarded = [];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relacion uno a muchos

    public function getcitas(){
        return $this->hasMany('App\Models\Cita');
    }

    // public function citas()
    // {
    //     return $this->hasMany('App\Article');
    // }

    // función para la búsqueda de usuarios
    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPassword($token));
    }


}
