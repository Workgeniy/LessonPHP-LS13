<?php

namespace App\Console\Commands;

use Faker\Core\File;
use FFI;
use Illuminate\Console\Command;
use Illuminate\Container\Attributes\Storage;


class UploadFilesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:upload-files-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
