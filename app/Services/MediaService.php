<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class MediaService
{

    public static function imageSave(string $path, $file)
    {
        return Storage::disk('public')->put($path, $file);
    }

    public static function imageRemove(string $path)
    {
        return Storage::disk('public')->delete($path);
    }
}
