<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //

    public function exercises()
    {
        return $this->hasMany('App\Exercise');
    }

    public function leader()
    {
        return $this->belongsTo('App\Leader');
    }
}
