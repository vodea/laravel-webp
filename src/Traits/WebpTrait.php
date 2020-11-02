<?php

namespace Buglinjo\LaravelWebp\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Config;

trait WebpTrait
{
    /**
     * @var UploadedFile
     */
    protected $image;

    /**
     * @var int
     */
    protected $quality;

    /**
     * @var path
     */
    protected $path;

    /**
     * @param UploadedFile $image
     * @return WebpTrait
     */
    public function make(UploadedFile $image): self
    {
        $this->quality = Config::get('laravel-webp.default_quality');
        $this->image = $image;

        return $this;
    }

    /**
     * @param string $path
     * @return WebpTrait
     */
    public function set(string $path): self
    {
        $this->quality = Config::get('laravel-webp.default_quality');
        $this->path = $path;

        return $this;
    }

    /**
     * @param $quality
     * @return WebpTrait
     */
    public function quality($quality): self
    {
        $this->quality = $quality;

        return $this;
    }
}
