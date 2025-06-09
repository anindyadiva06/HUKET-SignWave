<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $table = 'pertanyaan';
    protected $primaryKey = 'id_pertanyaan';

    protected $fillable = ['gambar', 'deskripsi_pertanyaan'];

    public function jawaban()
    {
        return $this->hasMany(Jawaban::class, 'id_pertanyaan');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($pertanyaan) {
            // Adjust the path to match the storage path
            $imagePath = 'public/' . $pertanyaan->gambar;
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }

            // Delete associated jawaban records
            $pertanyaan->jawaban()->delete();
        });
    }
}
