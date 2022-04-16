<?php

namespace App\Models\Estate;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'estates_categories';
    protected $guarded = [];
    public $timestamps = false;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function estates()
    {
        return $this->hasMany(Estate::class, 'estate_category_id', 'id');
    }


    public static function boot()
    {
        parent::boot();

        static::deleted(function ($category) {
            $category->estates()->update(['estate_category_id' => null]);
        });
    }
}
