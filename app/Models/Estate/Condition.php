<?php

namespace App\Models\Estate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;
    protected $table = 'estate_conditions';
    public $timestamps = false;
    protected $guarded = [];
}
