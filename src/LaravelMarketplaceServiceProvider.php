<?php

namespace Zvive\LaravelMarketplace;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Zvive\LaravelMarketplace\Commands\LaravelMarketplaceCommand;

class LaravelMarketplaceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-marketplace')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-marketplace_table')
            ->hasCommand(LaravelMarketplaceCommand::class);
    }
}
