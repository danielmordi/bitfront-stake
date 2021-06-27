<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        $role = \Auth::user()->role_id;

        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        }

        switch ($role) {
            case 1:
                return redirect()->intended(config('fortify.admin'));
            case 2:
                return redirect()->intended(config('fortify.account'));
            default:
                return redirect('/');
        }
        // dd(auth()->user()->role_id );
        // $home = auth()->user()->role_id == 1 ? '/admin' : '/account';
        // return redirect()->intended($home);
    }
}