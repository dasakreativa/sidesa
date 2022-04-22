<?php

namespace App\Console\Commands;

use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ViewCreation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new view blade file.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Create the directory
     *
     * @return void
     */
    public function __mkdir($path)
    {
        $path    = base_path("resources/views/{$path}");
        $dirname = dirname($path);

        if (!file_exists($dirname)) {
            mkdir($dirname, 0777, true);
        }
    }

    /**
     * Create File
     *
     * @return void
     */
    private function __create($path)
    {
        if (File::exists($path)) {
            $trans = $this->argument('trans');
            $this->error("The file already exists {$trans}.");
            return 0; // Break
        }
        $path = base_path("resources/views/{$path}");
        File::put($path, "<!DOCTYPE html>\n<html lang=\"id\">\n</html>");

        $path = str_replace('/', "\\", $path);
        $this->info("File {$path} successfuly created.");
    }

    /**
     * Check the file
     *
     * @return string
     */
    private function __path($file)
    {
        $replace = str_replace('.', '/', $file);
        return "{$replace}.blade.php";
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $file = $this->argument('file');
        $path = $this->__path($file);
        $this->__mkdir($path);
        $this->__create($path);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['trans', InputArgument::REQUIRED, 'The translate file.'],
        ];
    }
}
