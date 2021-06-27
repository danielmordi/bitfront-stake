<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Deposit;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class TransactionLogController extends Controller
{
    public function depositlog()
    {
        $dLog = Deposit::where('status', 'pending')->get();
        return view('admin.depositlog')->with('deposits', $dLog);
    }

    public function confirm($id)
    {
        $deposit = Deposit::find($id);
        $percent = $deposit->package->percentage;
        $duration = (int)$deposit->package->duration;
        $amount = $deposit->amount;
        $id = $deposit->user_id;
        
        // Calculate daily profit
        $profit = (($percent / 100) * $amount) / $duration;
        
        $update = User::find($id);
        $update->wallet_balance = $profit;
        $update->profit = $profit;
        $update->package = $deposit->package->name;
        $update->save();
        
        $deposit->status = 'completed';
        $deposit->save();
        
        return redirect()->back()->with('success', 'Confirmed!');
    }

    public function withdrawalog()
    {
        $withdrawalRequest = Withdrawal::where('status', 'pending')->paginate(10);
        return view('admin.withdrawalog')->with('withdrawalogs', $withdrawalRequest);
    }

    public function confrimWithdrawal($id)
    {
        $wt = withdrawal::find($id);
        $from = $wt->withdraw_from;
        $amount = floatval(preg_replace("/[^0-9.]/", "", $wt->amount));
        $id = $wt->user_id;
        $update = User::find($id);
        $fromValue = floatval(preg_replace("/[^0-9.]/", "", $update->$from));
        
        // Minus from wallet balance 
        $update->$from = $fromValue - $amount;
        $update->save();
        
        $wt->status = 'completed';
        $wt->save();
        
        return redirect()->back()->with('success', 'Confirmed!');
    }
}
