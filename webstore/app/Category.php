<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = "Category";
    public function products()
    {
        return $this->hasMany('App\products');
    }
    public $timestamps = false;
}
