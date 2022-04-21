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

    public const TYPES = [
        'house' => 'house',
        'building' => 'building',
        'flat' => 'flat',
        'region' => 'region'
    ];

    public const CATEGORIES = [
        'flats' => [
            'name' => 'Квартиры',
            'slug' => 'flats',
            'type' => 'flat'
        ],
        'buildings' => [
            'name' => 'Жилые комплексы',
            'slug' => 'buildings',
            'type' => 'building'
        ],
        'houses' => [
            'name' => 'Дома',
            'slug' => 'houses',
            'type' => 'house'
        ],
        'commerces' => [
            'name' => 'Коммерция',
            'slug' => 'commercial',
            'type' => 'commerce'
        ],
        'regions' => [
            'name' => 'Участки',
            'slug' => 'regions',
            'type' => 'region'
        ]
    ];


    public function photos()
    {
        return $this->hasMany(Photo::class);
    }


    public function addPhoto(string $path, $sort = 0)
    {
        return Photo::create([
            'estate_id' => $this->id,
            'path' => $path,
            'sort' => $sort
        ]);
    }

    public function setLayout(string $path)
    {
        $this->update(['layout_path' => $path]);
    }

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($estate) {
            $estate->photos()->delete();
        });
    }
}
