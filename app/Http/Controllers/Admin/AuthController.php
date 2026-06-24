<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    private const ADMIN_EMAIL    = 'ceoadhomethinhvuong@gmail.com';
    private const ADMIN_PASSWORD = '12345678';

    public function login(Request $request)
    {
        $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($request->email !== self::ADMIN_EMAIL || $request->password !== self::ADMIN_PASSWORD) {
            throw ValidationException::withMessages([
                'email' => 'Email hoặc mật khẩu không đúng.',
            ]);
        }

        $user = User::firstOrCreate(
            ['email' => self::ADMIN_EMAIL],
            ['name' => 'Admin PERFECT', 'password' => Hash::make(self::ADMIN_PASSWORD), 'role' => 'admin']
        );

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login.form');
    }
}
