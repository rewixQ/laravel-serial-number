<?php

namespace RewixQ\LaravelSerialNumber\Commands;

use Illuminate\Console\Command;

class LaravelSerialNumberCommand extends Command
{
    public $signature = 'make:serial-number';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
