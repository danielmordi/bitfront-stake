<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Coin;
use App\Models\Package;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawController extends Controller
{
    public function index()
    {
        $pcks = Package::where('name', Auth::user()->package)->first();
        $coins = Coin::get();
        $withdraw = Withdrawal::where('user_id', Auth::user()->id)->paginate(10);
        return view('user.withdraw')->with([
            'packages' => $pcks,
            'coins' => $coins,
            'withdrawals' => $withdraw
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'wallet_id' => 'required',
            'coin' => 'required|integer',
            'withdraw_from' => 'required'
        ],
        [
            'amount.numeric' => 'Please enter a valid value. Example: 100.00'
        ]);

        // Check for withdraw limit
        $from = $request->input('withdraw_from');

        $withdrawalLimit = Admin::get()->first();
        if ($request->input('amount') < $withdrawalLimit->withdraw_limit) {
            return redirect()->back()->withErrors('Request failed: Minimum withdrawal is '.$withdrawalLimit->withdraw_limit);
        } elseif (floatval(Auth::user()->$from) > floatval($request->input('amount'))) {
            return redirect()->back()->withErrors('Insufficient funds');
        }

        $withdrawalRequest = new Withdrawal;
        $withdrawalRequest->user_id = Auth::user()->id;
        $withdrawalRequest->coin_id = $request->input('coin');
        $withdrawalRequest->withdraw_from = $request->input('withdraw_from');
        $withdrawalRequest->wallet_id = $request->input('wallet_id');
        $withdrawalRequest->amount = preg_replace("/[^0-9.]/", "", $request->input('amount'));
        $withdrawalRequest->status = 'pending';
        $withdrawalRequest->save();

        return redirect()->back()->with('success', 'Your withdrawal request has been sent successfully!');
    }
}
