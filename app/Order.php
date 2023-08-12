<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    protected $table='order';
    public function user(): BelongsTo

    {
        return $this->belongsTo(User::class);
    }
    public function item(): BelongsToMany
    {
        return $this->belongsToMany(Item::class,'order_detail','order_id','item_id');
    }
}

