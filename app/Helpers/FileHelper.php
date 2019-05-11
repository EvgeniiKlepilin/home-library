<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileHelper
{

    public static function storeFile(UploadedFile $file, $path, $prefix) : string
    {
        $fileName = $prefix . md5(time(). $file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
        Storage::disk('local')->putFileAs($path, $file, $fileName);
        return Str::replaceFirst("public", "storage", $path) . $fileName;
    }

    /**
     * @param $filePath
     *
     * @void
     */
    public static function deleteFile($filePath)
    {
        Storage::disk('local')->delete($filePath);
    }
}
