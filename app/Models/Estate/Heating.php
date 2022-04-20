<?php

namespace App\Models\Estate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heating extends Model
{
    use HasFactory;
    protected $table = 'estate_heating';
    public $timestamps = false;
    protected $guarded = [];
}
