<?php

namespace App\Console;

use App\Console\Commands\SubscriptionRenew;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        //
        SubscriptionRenew::class
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('subscription:renew')->timezone('Asia/Dhaka')->dailyAt('8:00')->runInBackground();
        $schedule->command('subscription:renew')->timezone('Asia/Dhaka')->dailyAt('12:00')->runInBackground();
        $schedule->command('subscription:renew')->timezone('Asia/Dhaka')->dailyAt('15:00')->runInBackground();

        $schedule->call(function () {
                info("Test Schedule Run");
            })->everyMinute()->runInBackground();

        // $schedule->command('make:test')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
