<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
  public function subscriptions()
  {
      return $this->hasMany('App\Subscriptions');
  }

  protected $fillable = ['title', 'content'];
}
