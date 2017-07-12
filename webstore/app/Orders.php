<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    public function costumerOrdersProducts()
    {
        return $this->hasMany('App\costumerOrdersProducts');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
