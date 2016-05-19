<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sofa\Eloquence\Eloquence;

class Item extends Model
{
    use SoftDeletes, SluggableTrait, Eloquence;

    protected $sluggable = [
        'build_from' => 'content',
        'save_to'    => 'slug',
    ];

    protected $searchableColumns = ['content', 'content', 'category.name'];

    protected $fillable = ['content'];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
