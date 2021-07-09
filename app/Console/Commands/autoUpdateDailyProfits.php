<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class autoUpdateDailyProfits extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updateprofits';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto update and add to user wallet balance with profit daily';

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
        $users = User::where('role_id', '!=', 1)->get();

        foreach ($users as $user) {
            $wb = floatval(preg_replace("/[^0-9.]/", "", $user->wallet_balance));
            $profit = floatval(preg_replace("/[^0-9.]/", "", $user->profit));
            
            // Update
            $user->wallet_balance = $wb + $profit;
            $user->save();
        }
        
        echo "Update was successful!";
    }
}
