<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fotos extends Model
{
    public function products()
    {
        return $this->belongsTo('App\products');
    }
}
