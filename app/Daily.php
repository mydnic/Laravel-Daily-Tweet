<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    protected $table = 'daily_item';

    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
