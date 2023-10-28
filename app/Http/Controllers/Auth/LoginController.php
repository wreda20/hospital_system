<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function userForm(){

        return view('User.auth.login');
    }

    public function adminForm(){

        return view('Admin.auth.login');
    }

    public function login(Request $request)
    {

        if ($request->type == 'user'){
            $guardName = 'web';
        }

        if ($request -> type == 'admin'){
            $guardName = 'admin';
        }

        if (Auth::guard($guardName)->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if($request->type == 'user'){
                return redirect()->intended(RouteServiceProvider::HOME);
            } else {
                return redirect()->intended(RouteServiceProvider::ADMIN);
            }
        } else {
            return redirect()->back();
        }
    }

    public function logout(Request $request,$type)
    {
        Auth::guard($type)->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if($type == 'web'){
            return redirect()->route('user.login');
        } else {
            return redirect()->route('admin.form');
        }
    }
}
