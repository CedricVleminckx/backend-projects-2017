<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
  public function events()
  {
      return $this->hasMany('App\Events');
  }

  public function user()
  {
      return $this->hasMany('App\User');
  }

  protected $fillable = ['users_id', 'events_id'];
  public $timestamps = false;
}
