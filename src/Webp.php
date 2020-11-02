<?php

namespace Buglinjo\LaravelWebp;

use Exception;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\UploadedFile;

class Webp
{
    /**
     * @param UploadedFile $image
     * @return Cwebp|Traits\WebpTrait
     * @throws Exception
     */
    public static function make(UploadedFile $image)
    {
        $driver = Config::get('laravel-webp.default_driver');

        if ($driver === 'php-gd') {
            //
        } elseif ($driver === 'cwebp') {
            return (new Cwebp())->make($image);
        }

        throw new Exception('Driver [' . $driver . '] is not supported.');
    }

    /**
     * @param string $path
     * @return Cwebp|Traits\WebpTrait
     * @throws Exception
     */
    public static function set(string $path)
    {
        $driver = Config::get('laravel-webp.default_driver');

        if ($driver === 'php-gd') {
            //
        } elseif ($driver === 'cwebp') {
            return (new Cwebp())->set($path);
        }

        throw new Exception('Driver [' . $driver . '] is not supported.');
    }
}
