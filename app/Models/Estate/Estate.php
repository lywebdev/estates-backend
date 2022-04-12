<?php

namespace App\Models\Estate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;

    protected $table = 'estates';
    protected $guarded = [];
}
