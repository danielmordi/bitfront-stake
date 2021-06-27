<?php

namespace App\Http\Controllers;

use Response;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        # code...
    }

    public function viewUser($id)
    {
        $user = User::find($id);
        return view('admin.view')->with('user', $user);
    }

    public function walletBal(Request $request, $id)
    {
        $user = User::find($id);
        $amount = $request->input('amount');
        $amount = preg_replace("/[^0-9.]/", "", $amount);

        $user->wallet_balance = $amount;
        $user->save();

        return Response::json([
            'success' => "You have successfully updated {$user->name}'s wallet balanace."
        ]);
    }
    
    public function bonus(Request $request, $id)
    {
        $user = User::find($id);
        $amount = $request->input('amount');
        $amount = preg_replace("/[^0-9.]/", "", $amount);

        $user->bonus = $amount;
        $user->save();

        return Response::json([
            'success' => "You have successfully updated {$user->name}'s Bonus."
        ]);
    }
    
    public function hashRate(Request $request, $id)
    {
        $user = User::find($id);
        $amount = $request->input('amount');
        $amount = preg_replace("/[^0-9.]/", "", $amount);

        $user->hashing_fee = $amount;
        $user->save();

        return Response::json([
            'success' => "You have successfully updated {$user->name}'s Hashing fee."
        ]);
    }
}
