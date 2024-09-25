<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('login');
        }else {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if (Auth::attempt(['email' =>$request->email,'password'=>$request->password])) {
                return redirect()->route('admin.index');
            }

            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
