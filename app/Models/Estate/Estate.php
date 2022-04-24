<?php

namespace App\Models\Estate;

use App\Services\MediaService;
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
//        'houses' => [
//            'name' => 'Дома',
//            'slug' => 'houses',
//            'type' => 'house'
//        ],
        'regions' => [
            'name' => 'Дома \ Участки',
            'slug' => 'regions',
            'type' => 'region'
        ],
        'commercial' => [
            'name' => 'Коммерция',
            'slug' => 'commercial',
            'type' => 'commerce'
        ],
//        'buildings' => [
//            'name' => 'Новостройки',
//            'slug' => 'buildings',
//            'type' => 'building'
//        ],
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
            $estate->photos->map(function ($photo) {
                $photo->delete();
            });

            MediaService::deleteDir('uploads/estates/' . $estate->category . "/" . $estate->id);
        });
    }
}
