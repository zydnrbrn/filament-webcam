<?php

namespace Zydnrbrn\FilamentWebcam\Commands;

use Illuminate\Console\Command;

class FilamentWebcamCommand extends Command
{
    public $signature = 'filament-webcam';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
