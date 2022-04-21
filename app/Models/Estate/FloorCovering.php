<?php

namespace App\Models\Estate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FloorCovering extends Model
{
    use HasFactory;
    protected $table = 'estate_floor_coverings';
    public $timestamps = false;
    protected $guarded = [];
}
