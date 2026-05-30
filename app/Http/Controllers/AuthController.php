<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Hash;

class AuthController extends Controller
{
    // login page
    public function login()
    {
        return view('admin.auth.login');
    }

    // login submit
    public function loginSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($credentials)) {

            return redirect()->route('admin.dashboard')
                ->with('success', 'Login Success');
        }
        

        return back()->with('error', 'Invalid Credentials');
    }

    // dashboard
    public function dashboard()
    {
      return view('admin.dashboard');
    }

    // logout
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}
