<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    // app/Http/Kernel.php


      protected $routeMiddleware = [
        // the image will be replaced with an optimized version which should be smaller
        //app(Spatie\ImageOptimizer\OptimizerChain::class)->optimize($pathToImage),
        'optimizeImages' => \Spatie\LaravelImageOptimizer\Middlewares\OptimizeImages::class,
      ];
}
