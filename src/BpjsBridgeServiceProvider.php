<?php

namespace Hanzoasashi\BpjsBridge;

use Hanzoasashi\BpjsBridge\Commands\BpjsBridgeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BpjsBridgeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('bpjs-bridge')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_bpjs-bridge_table')
            ->publishesServiceProvider('BpjsBridgeServiceProvider')
            ->hasCommand(BpjsBridgeCommand::class);
    }
}
