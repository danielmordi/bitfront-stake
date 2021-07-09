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
        $dLog = Deposit::where('status', 'pending')->latest()->get();
        return view('admin.depositlog')->with('deposits', $dLog);
    }

    public function confirm($id)
    {
        $deposit = Deposit::find($id);
        $percent = $deposit->package->percentage;
        $duration = $deposit->package->duration;
        $amount = $deposit->amount;
        $id = $deposit->user_id;
        
        // Calculate daily profit
        $profit = ((intval($percent) / 100) * intval($amount)) / intval($duration);
        
        $update = User::find($id);
        $update->wallet_balance = $profit;
        $update->profit = $profit;
        $update->package = $deposit->package->name;
        $update->save();
        
        $deposit->status = 'completed';
        $deposit->save();
        
        return redirect()->back()->with('success', 'Confirmed!');
    }

    public function cancelDeposit($id)
    {
        $cancel = Deposit::findOrFail($id);
        $cancel->status = 'canceled';
        $cancel->save();

        return redirect()->back()->with('success', 'Deposit request has been mark as a failed transaction!');
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

    public function cancelWithdrawal($id)
    {
        $cancel = Withdrawal::findOrFail($id);
        $cancel->status = 'canceled';
        $cancel->save();

        return redirect()->back()->with('success', 'Withdrawal request has been mark as a failed transaction!');
    }
}
