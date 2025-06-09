<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Akun;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tambahkan data seeding di sini
        $admin = Akun::create([
            'username' => 'athifa',
            'password' => bcrypt('123'), // Enkripsi password
            'nama' => 'athifa',
            'role' => 'admin',
        ]);
$admin->assignRole('admin');
        // Tambahkan data seeding di sini
        $user = Akun::create([
            'username' => 'nuansa',
            'password' => bcrypt('123'), // Enkripsi password
            'nama' => 'nuansa',
            'role' => 'user',
        ]);
$user->assignRole('user');

    }
}
