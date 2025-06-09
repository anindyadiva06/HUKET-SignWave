<?php

// Sisipkan autoloader agar dapat mengakses kelas-kelas Laravel
require __DIR__.'/vendor/autoload.php';

// Inisialisasi Laravel agar bisa menggunakan fitur-fiturnya
$app = require_once __DIR__.'/bootstrap/app.php';

// Menjalankan kernel konsol untuk memastikan Laravel diinisialisasi dengan benar
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Ambil akun admin dari database
use Illuminate\Support\Facades\Hash;
use App\Models\Akun;

$admin = Akun::where('username', 'admin')->first();

if ($admin) {
    // Ubah kata sandi menjadi hash menggunakan bcrypt
    $admin->password = Hash::make('123');

    // Simpan perubahan ke dalam database
    $admin->save();

    echo "Password admin telah di-hash.";
} else {
    echo "Akun admin tidak ditemukan.";
}
