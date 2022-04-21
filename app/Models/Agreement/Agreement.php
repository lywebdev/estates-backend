<?php

namespace App\Models\Agreement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;

    protected $table = 'agreements';
    protected $guarded = [];

    public const TYPES = [
        'owner' => [
            'name' => 'Собственник',
            'list' => [
                'standard' => 'Стандартный для Собственника',
                'partialExclusive' => 'Частичный эксклюзив для Собственника',
                'exclusive' => 'Эксклюзив для собственника'
            ]
        ],
        'buyer' => 'Покупатель',
        'agent' => 'Кандидат-агент',
        'rent'  => [
            'name' => 'Аренда',
            'list' => [
                'terant' => 'Арендатор',
                'landlord' => 'Арендодатель'
            ]
        ]
    ];
}
