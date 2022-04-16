<?php

namespace App\Models\Estate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Estate extends Model
{
    use HasFactory;

    protected $table = 'estates';
    protected $guarded = [];


    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'estate_category_id', 'id');
    }



    public function addPhoto(string $path, $sort = 0)
    {
        return Photo::create([
            'estate_id' => $this->id,
            'path' => $path,
            'sort' => $sort
        ]);
    }

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($estate) {
            $estate->photos()->delete();
        });
    }
}
