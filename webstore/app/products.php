<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
    public function products()
    {
        return $this->hasMany('App\products');
    }
    public function fotos()
    {
        return $this->hasMany('App\fotos');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
