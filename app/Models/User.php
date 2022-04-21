<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public const ROLES = [
        'admin' => [
            'name' => 'admin',
            'rus' => 'Админ'
        ],
        'moderator' => [
            'name' => 'moderator',
            'rus' => 'Модератор'
        ],
        'agent' => [
            'name' => 'agent',
            'rus' => 'Агент'
        ],
        'candidat' => [
            'name' => 'candidat',
            'rus' => 'Кандидат'
        ],
        'user' => [
            'name' => 'user',
            'rus' => 'Пользователь'
        ]
    ];
    public const GENDERS = [
        'man' => [
            'name' => 'man',
            'rus' => 'Мужской'
        ],
        'woman' => [
            'name' => 'woman',
            'rus' => 'Женский'
        ]
    ];


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function isAdmin()
    {
        return $this->role == User::ROLES['admin']['name'];
    }

    public function isAgent()
    {
        return $this->role == User::ROLES['agent']['name'];
    }

    public function role()
    {
        return User::ROLES[$this->role]['rus'];
    }
}
