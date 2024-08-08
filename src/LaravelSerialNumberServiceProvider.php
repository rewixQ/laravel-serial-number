<?php

namespace RewixQ\LaravelSerialNumber;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RewixQ\LaravelSerialNumber\Commands\LaravelSerialNumberCommand;

class LaravelSerialNumberServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-serial-number')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_serial_number_table')
            ->hasCommand(LaravelSerialNumberCommand::class);
    }
}
