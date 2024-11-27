<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function bbss()
    {
        return $this->hasMany('App/Bbs');
    }
}
