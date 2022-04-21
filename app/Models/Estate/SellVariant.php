<?php

namespace App\Models\Estate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellVariant extends Model
{
    use HasFactory;
    protected $table = 'estate_sell_variants';
    public $timestamps = false;
    protected $guarded = [];
}
