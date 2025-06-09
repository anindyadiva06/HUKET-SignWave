<?php
// app/Http/Controllers/LoginController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Akun;
use Spatie\Permission\Models\Role;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->put('nama', $user->nama); // Menyimpan nama di session
            $request->session()->put('username', $user->username);

            // Menggunakan Spatie untuk role
            if ($user->hasRole('admin')) {
                $request->session()->put('role', 'admin');
                return redirect()->route('dashboard-admin');
            } else {
                $request->session()->put('role', 'user');
                return redirect()->route('home-user');
            }
        }

        return back()->withErrors([
            'username' => 'Username atau password tidak sesuai.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
?>