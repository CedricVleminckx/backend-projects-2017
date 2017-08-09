<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class costumerordersproducts extends Model
{
    public function order()
    {
        return $this->belongsTo('App\Orders');
    }
    public function products()
    {
        return $this->belongsTo('App\products');
    }
}
