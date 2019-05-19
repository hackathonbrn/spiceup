<?php
namespace App\Console\Commands;

use App\Models\Scene;
use App\Models\SceneWidget;
use App\Models\Screen;
use App\Services\Github;
use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class GenerateCommand extends Command
{
    protected $signature = 'data:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate data';

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
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $githubService = new Github();
        $githubService->getRepos();
    }
}