<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    public $timestamps = false;

    protected $primaryKey = 'id_feedback';

    protected $fillable = ['nama', 'isi'];
}


?>