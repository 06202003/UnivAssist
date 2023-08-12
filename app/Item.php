<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    protected $table='item';
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'keranjang','item_id','user_NIK')->withPivot('lama_sewa');
    }
    public function penyedia(): BelongsTo
    {
        return $this->belongsTo(Penyedia::class);
    }
    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class,'order_detail','item_id','order_id');
    }
}
