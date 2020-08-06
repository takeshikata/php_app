<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  // protected $fillable = ['id', 'body'];

  public function images() {
    return $this->hasMany('App\Image');
  }
}
