<?php

namespace App\Rules\Auth;

use App\Models\AdminUser;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class ValidateDataFilter
{
    public static function removeDataNamespace($data)
    {
        array_map(function ($row) {
            return explode('.', $row)[0];
        }, $data);

        return $data;
    }
}
