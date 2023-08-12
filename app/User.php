<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    // protected $table='user';
    protected $table='users';
    protected $primaryKey = 'NIK';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NIK', 'role', 'password','email','nama','alamat','negara','provinsi','kota','telepon','NRP','Universitas','foto','foto_ktp','foto_ktm',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function item(): BelongsToMany
    {
        return $this->belongsToMany(Item::class,'keranjang','user_NIK','item_id')->withPivot('lama_sewa');
    }
    public function order(): HasMany

    {
        return $this->hasMany(Order::class);
    }

}
