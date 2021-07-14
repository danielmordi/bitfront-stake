<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        if (Auth::user() !== null) {
//            if (Auth::user()->role_id == 1) {
//                return route('admin.dashboard');
//            }
//            return route('user.dashboard');
//        }
//    }
    public function index()
    {
        return view('home.index');
    }
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
