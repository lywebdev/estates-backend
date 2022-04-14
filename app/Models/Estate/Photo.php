<?php

namespace App\Models\Estate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
