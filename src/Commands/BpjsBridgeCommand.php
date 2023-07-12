<?php

namespace Hanzoasashi\BpjsBridge\Commands;

use Illuminate\Console\Command;

class BpjsBridgeCommand extends Command
{
    public $signature = 'bpjs-bridge';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
