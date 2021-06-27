<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function admin()
    {
        $users = User::where('role_id', 2)->paginate(10);
        return view('admin.dashboard')->with('users', $users);
    }
    
    public function user()
    {
        $package = Package::where('name', Auth::user()->package)->first();
        return view('user.dashboard')->with('package', $package);
    }
}
