<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function detailpost()
    {
       return $this->hasMany('App\DetailPost','post_id','id');
    }
}
