<?php

namespace App\Console;

use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\CommodityAuction;
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
          $current = Carbon::now();

          $commodity_auctions=CommodityAuction::all();
          foreach($commodity_auctions as $commodity_auction){
            if($commodity_auction->auction_ends_at<=$current){
              CommodityAuction::where('id',$commodity_auction->id)->delete();
              $dataArray      =       array(
                    "added_for_auction"         =>          '0'
                );
              Products::where('id',$commodity_auction->product_id)->update($dataArray);
            }
          }
        })->everyMinute();
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
}
