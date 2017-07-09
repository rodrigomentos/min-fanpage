<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPost extends Model
{
  protected $table = 'detailpost';

  public function post()
  {
      return $this->belongsTo('App\Post');
  }
}
