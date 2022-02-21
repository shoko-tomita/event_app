<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Thread extends Model
{
    protected $fillable = [
        'modified'
    ];
    public function threads()
    {
        //
    }
}
