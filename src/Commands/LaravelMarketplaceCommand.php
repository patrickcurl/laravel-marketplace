<?php

namespace Zvive\LaravelMarketplace\Commands;

use Illuminate\Console\Command;

class LaravelMarketplaceCommand extends Command
{
    public $signature = 'laravel-marketplace';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
