<?php

namespace App\Models\Estate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WallMaterial extends Model
{
    use HasFactory;
    protected $table = 'estate_wall_materials';
    public $timestamps = false;
    protected $guarded = [];
}
