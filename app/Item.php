<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['content'];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
