<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Bbs extends Model
{
    use HasFactory, Notifiable;
    
    public function thread()
    {
        return $this->belongsTo('App/Thread');
    }
}
