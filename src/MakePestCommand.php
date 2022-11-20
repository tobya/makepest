<?php

namespace Tobya\Makepest;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MakePestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:pest {name : The name of the file} {--unit : Create a unit test} {--dusk : Create a Dusk test} {--test-directory=tests : The name of the tests directory} {--force : Overwrite the existing test file with the same name}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new test file.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Simply call the pest:test command with passed params.
        $result = Artisan::call('pest:test',
                    ['name' => $this->argument('name'),
                        '--unit' => $this->option('unit'),
                        '--dusk' => $this->option('dusk'),
                        '--test-directory' => $this->option('test-directory'),
                        '--force' => $this->option('force')]);

        $this->info(Artisan::output());

        return $result;
    }


}
