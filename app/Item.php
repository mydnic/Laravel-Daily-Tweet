<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;

class Item extends Model implements SluggableInterface
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
