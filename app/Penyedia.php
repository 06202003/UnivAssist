<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penyedia extends Model
{
    protected $table='penyedia';
    public function item(): HasMany

    {
        return $this->hasMany(Item::class);
    }
}
