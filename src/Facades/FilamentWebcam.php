<?php

namespace Zydnrbrn\FilamentWebcam\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zydnrbrn\FilamentWebcam\FilamentWebcam
 */
class FilamentWebcam extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Zydnrbrn\FilamentWebcam\FilamentWebcam::class;
    }
}
