<?php

namespace App\Models\Estate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewage extends Model
{
    use HasFactory;
    protected $table = 'estate_sewage';
    public $timestamps = false;
    protected $guarded = [];
}
