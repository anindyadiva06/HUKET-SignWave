<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = Akun::all();
        return view('index-kelola-user', compact('users'));
    }

    public function create()
    {
        return view('create-user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:akun',
            'nama' => 'required',
            'password' => 'required|min:3',
            'role' => 'required|in:admin,user',
        ]);

        $user = Akun::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        $user->assignRole($request->role);

        return redirect()->route('index-kelola-user')->with('success', 'User berhasil ditambahkan!');
    }


    public function edit($username)
    {
        $user = Akun::where('username', $username)->firstOrFail();
        return view('edit-user', compact('user'));
    }

    public function update(Request $request, $username)
    {
        $request->validate([
            'nama' => 'required',
            'password' => 'nullable|min:3',
            'role' => 'required|in:admin,user',
        ]);

        $user = Akun::where('username', $username)->firstOrFail();
        $user->nama = $request->nama;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->role = $request->role;
        $user->save();

        // Sync roles
        $user->syncRoles($request->role);

        return redirect()->route('index-kelola-user')->with('success', 'User ' . $user->nama . ' berhasil diupdate!');
    }

    public function destroy($username)
    {
        $user = Akun::where('username', $username)->firstOrFail();
        $user->delete();

        return redirect()->route('index-kelola-user')->with('success', 'User ' . $user->nama . ' berhasil dihapus!');
    }
}


?>