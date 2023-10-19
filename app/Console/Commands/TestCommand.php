<?php

namespace App\Console\Commands;

use App\Models\PurchaseDetail;
use App\Models\TestModel;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $data = TestModel::create([
            'name'=>"Test",
            'phone'=>"01754125852",
            'address'=>"Dhaka",
        ]);

        echo "Data Insert Successfully";
    }
}
