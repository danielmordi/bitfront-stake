<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Deposit;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function index()
    {
        $coins = Coin::get();
        $packages = Package::get();
        $deposit = Deposit::latest()->get();
        return view('user.deposit')->with([
            'coins' => $coins,
            'packages' => $packages,
            'logs' => $deposit
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'coin' => 'required|integer',
            'package' => 'required|integer',
            'deposit_amount' => 'required',
        ],
        [
            'coin.integer' => 'Choose a valid coin',
            'package.integer' => 'Choose a valid package',
            'deposit_amount' => 'Please enter a valid deposit amount without commas'
        ]);

        if ($request->input('deposit_amount')) {
            $deposit_amount = preg_replace("/[^0-9.]/", "", $request->deposit_amount);
        }

        $package = Package::find($request->input('package'));

        if ($request->input('deposit_amount') < $package->min_val) {
            // dd('Hello');
            return redirect()->back()
            ->with('failed', "The minimum amount for {$package->name} is \${$package->min_val}");
        }


        $deposit = new Deposit;
        $deposit->user_id = Auth::user()->id;
        $deposit->coin_id = $request->input('coin');
        $deposit->package_id = $request->input('package');
        $deposit->amount = $deposit_amount;
        $deposit->status = 'pending';
        $deposit->save();


        return redirect()->route('user.deposit.info', $deposit->id)
        ->with('success', 'Your deposit request has been sent successfully, please follow the instructions below to complete deposit');
    }

    public function showDepositInfo($id)
    {
        $latestDeposit = Deposit::where([
            'user_id' => Auth::user()->id,
        ])->findOrFail($id);

        return view('user.deposit-info')->with([
            'currentDeposit' => $latestDeposit,
        ]);
    }
}
