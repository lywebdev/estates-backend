<?php

namespace App\Models\Estate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        return $this->belongsTo(Category::class);
    }



    public function addPhoto($file, $sort = 0)
    {
        $savedFilePath = 'uploads/estates/' . $this->id . '/' . uniqid() . '.' . $file['format'];
        Storage::disk('public')->put($savedFilePath, $file['body']);
        Storage::put($savedFilePath, $file['body']);
        return Photo::create([
            'estate_id' => $this->id,
            'path' => $savedFilePath,
            'sort' => $sort
        ]);
    }
}
