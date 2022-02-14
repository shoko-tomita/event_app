<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function threads()
    {
        return $this->hasMany('App\Thread');
    }
}
