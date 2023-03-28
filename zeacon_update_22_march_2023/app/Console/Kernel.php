<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Session;
use App\Models\CryptoDeposit;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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
        $schedule->call(function () {
            if(Session::get('crypto_payment_id')=='waiting'){
                $crypto_deposit = CryptoDeposit::where('payment_id', Session::get('crypto_payment_id'))->first();
            $payment = json_decode(Http::withOptions(['verify' => false])->withHeaders([
                'x-api-key' => env('COIN_API'),
            ])->get(env('COIN_BASE') . 'payment/' . $crypto_deposit->payment_id,)->body());
    
            if ($payment['status'] == 'finished') {
                $crypto_deposit->status=$payment['status'];
                $crypto_deposit->save();
                $wallet = new Wallet();
                $wallet->uID=Auth::id();
                $wallet->cr=$crypto_deposit->amount;
                $wallet->nar='Crypto Deposit';
                $wallet->type=1;
                $wallet->status=1;
                $wallet->dtype=3;
                $wallet->save();
            }
            }
        })->hourly();
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
