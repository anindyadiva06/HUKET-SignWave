<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Akun extends Authenticatable
{
    use HasFactory;
    use HasRoles;

    protected $table = 'akun';
    protected $primaryKey = 'id_akun';

    protected $fillable = [
        'username', 'password', 'nama', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false; // Nonaktifkan timestamps
}
