<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo de tienda.
 */
class Store extends Model
{
    /**
     * Relación de las etiquetas asociadas a la tienda.
     */
    public function tags() 
    {
        return $this->belongsToMany('App\StoreTag', 'store_tag_rel', 'store_id', 'tag_id');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
