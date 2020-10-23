<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes, Eloquence, Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'content'
            ]
        ];
    }

    protected $sluggable = [
        'build_from' => 'content',
        'save_to' => 'slug',
    ];

    protected $searchableColumns = ['content', 'content', 'category.name'];

    protected $fillable = ['content'];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
