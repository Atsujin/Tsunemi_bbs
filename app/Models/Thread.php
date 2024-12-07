<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Thread extends Model
{


    public function threadSave($request)
    {
        $this->name = $request->name;
        $this->title = $request->title;
        $this->save();
    }

    public function bbss()
    {
        return $this->hasMany('App/Bbs');
    }
}
