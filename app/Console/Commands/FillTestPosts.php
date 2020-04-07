<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\News;

class FillTestPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:test {count=10}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fill test data in table Posts';

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
        $count_records = $this->argument('count');
        $count_records = (int)$count_records;
        $ed_works = factory(News::class, $count_records)->create();
    }
}
