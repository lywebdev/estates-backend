<?php

namespace App\Models\Estate;

use App\Services\MediaService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'estates_photos';
    public $timestamps = false;
    protected $fillable = ['estate_id', 'path', 'sort'];



    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($photo) {
            MediaService::imageRemove($photo->path);
        });
    }
}
