<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function showAdminProfile()
    {
        return view('profile-admin');
    }

    public function showUserProfile()
    {
        $user = Auth::user();
        return view('profile-user', compact('user'));
    }

    public function editUserProfile()
    {
        $user = Auth::user();
        return view('edit-user-profile', compact('user'));
    }

    public function updateUserProfile(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'current_password' => 'nullable|string',
            'new_password' => 'nullable|string|min:3|confirmed',
        ], [
            'current_password.required' => 'Password saat ini harus diisi.',
            'new_password.min' => 'Password baru harus minimal 3 karakter.',
            'new_password.confirmed' => 'Konfirmasi password baru tidak sesuai.',
        ]);

        $user = Auth::user();
        $user->nama = $request->nama;

        if ($request->filled('current_password') || $request->filled('new_password') || $request->filled('new_password_confirmation')) {
            if (!Hash::check($request->current_password, Auth::user()->password)) {
                return back()->withErrors(['current_password' => 'Password saat ini tidak sesuai.']);
            }

            if ($request->filled('new_password') && $request->filled('new_password_confirmation')) {
                $user->password = Hash::make($request->new_password);
            }
        }

        $user->save();

        // Perbarui nama di sesi
        $request->session()->put('nama', $user->nama);

        return redirect()->route('profile-user')->with('success', 'Informasi kun berhasil diperbarui!');
    }
    public function editAdminProfile()
    {
        $user = Auth::user();
        return view('edit-profile-admin', compact('user'));
    }

    public function updateAdminProfile(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'current_password' => 'nullable|string',
            'new_password' => 'nullable|string|min:3|confirmed',
        ], [
            'current_password.required' => 'Password saat ini harus diisi.',
            'new_password.min' => 'Password baru harus minimal 3 karakter.',
            'new_password.confirmed' => 'Konfirmasi password baru tidak sesuai.',
        ]);

        $user = Auth::user();
        $user->nama = $request->nama;

        if ($request->filled('current_password') || $request->filled('new_password') || $request->filled('new_password_confirmation')) {
            if (!Hash::check($request->current_password, Auth::user()->password)) {
                return back()->withErrors(['current_password' => 'Password saat ini tidak sesuai.']);
            }

            if ($request->filled('new_password') && $request->filled('new_password_confirmation')) {
                $user->password = Hash::make($request->new_password);
            }
        }

        $user->save();

        // Perbarui nama di sesi
        $request->session()->put('nama', $user->nama);

        return redirect()->route('profile-admin')->with('success', 'Informasi akun berhasil diperbarui!');
    }

    }
?>