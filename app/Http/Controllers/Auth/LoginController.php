<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $validator = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // If the validation fails, redirect back to the login page
        if ($validator) {
            $user = User::where('username', $request->username)
                ->orWhere('email', $request->username)
                ->first();
            if ($user) {
                // Attempt to log the user in
                $password = 'gbghfd65#2w45' . $request->password . 'sdghgh^$^';
                if (Auth::attempt(['username' => $request->username, 'password' => $password]) || Auth::attempt(['email' => $request->username, 'password' => $password])) {
                    // Authentication passed...
                    $request->session()->regenerate();
                    $notification = [
                        'message' => 'Login Berhasil',
                        'alert-type' => 'success',
                    ];
                    return redirect()
                        ->intended('dashboard')
                        ->with($notification);
                } else {
                    // Authentication failed...
                    $notification = [
                        'message' => 'Password Salah',
                        'alert-type' => 'error',
                    ];
                    return redirect()
                        ->back()
                        ->with($notification);
                }
            } else {
                $notification = [
                    'message' => 'Username atau Email tidak terdaftar',
                    'alert-type' => 'error',
                ];
                return redirect()
                    ->back()
                    ->with($notification);
            }
        } else {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
    }
}
