<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes, Sluggable;

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

    protected $searchableColumns = ['content', 'content', 'category.name'];

    protected $fillable = ['content'];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public static function findBySlug($slug)
    {
        return self::where('slug', $slug)->firstOrFail();
    }
}
