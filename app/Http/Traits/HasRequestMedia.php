<?php

namespace App\Http\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Laravel\Jetstream\Features;

trait HasRequestMedia
{
    /**
     * Get the URL to the request's media file.
     *
     * @return string
     */
    public function getRequestMediaUrlAttribute()
    {
        return $this->media
                    ? Storage::disk($this->requestMediaDisk())->url($this->media->path)
                    : $this->defaultRequestMediaUrl();
    }

    /**
     * Get the default request media URL if no request media has been uploaded.
     *
     * @return string
     */
    protected function defaultRequestMediaUrl()
    {
        return 'https://picsum.photos/851/315';
    }

    /**
     * Get the disk that profile photos should be stored on.
     *
     * @return string
     */
    protected function requestMediaDisk()
    {
        return isset($_ENV['VAPOR_ARTIFACT_NAME']) ? 's3' : 'public';
    }
}
